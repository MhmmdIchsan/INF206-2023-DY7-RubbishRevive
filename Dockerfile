# Menggunakan image resmi PHP 8.2 sebagai base
FROM php:8.2-fpm

# Install dependensi sistem yang dibutuhkan, PHP extensions, dan Composer
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Salin file composer.json dan composer.lock sebelum mengcopy seluruh source code
COPY composer.json composer.lock ./

# Install dependensi Composer
RUN composer install --no-dev --optimize-autoloader --no-scripts --prefer-dist

# Salin seluruh source code Laravel ke container
COPY . .

# Pastikan direktori storage dan bootstrap/cache ada
RUN mkdir -p storage bootstrap/cache

# Generate key
RUN php artisan key:generate || echo "Failed to generate app key"

# Set permission untuk folder storage dan bootstrap/cache
RUN chmod -R 777 storage bootstrap/cache

# Install Node.js dependencies dan build asset frontend
RUN npm install && npm run build

# Expose port 9000 dan jalankan PHP-FPM
EXPOSE 9000
CMD ["php-fpm"]
