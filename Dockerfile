# Menggunakan image PHP dengan FPM dan Alpine sebagai base image
FROM php:8.1-fpm-alpine

# Mengatur direktori kerja
WORKDIR /var/www/html

# Install dependensi sistem yang dibutuhkan
RUN apk add --no-cache \
    git \
    unzip \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    curl

# Install ekstensi PHP yang dibutuhkan oleh Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring exif pcntl bcmath xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy file composer.json dan composer.lock ke dalam container
COPY composer.json composer.lock ./

# Install dependensi PHP
RUN composer install --no-dev --optimize-autoloader

# Copy seluruh source code aplikasi Laravel ke container
COPY . .

# Set permission untuk folder Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Expose port 9000 (PHP-FPM)
EXPOSE 9000

# Menjalankan PHP-FPM sebagai service
CMD ["php-fpm"]
