# INF206-2023-DY7-RubbishRevive
<p>Web-Based Application that provides waste exchange services, garbage pickup and information on how to manage waste</p>
<hr>
<h3>Kelompok 7</h4>
<p>Muhammad Ichsan (2108107010096)</p>
<p>Adrean Badar (2108107010092)</p>
<p>Laila Asrin (2108107010068)</p>
<p>Nabilah Qurratul Annisa (2108107010010)</p>
<p>Tyara Raynasari (2108107010030)</p>
<hr>

<p> The following are the steps for running this application </p>

<p> 1. Clone this repo</p>
<pre><code> git clone https://github.com/MhmmdIchsan/INF206-2023-DY7-RubbishRevive.git </pre></code>

<p> 2. Open the directory</p>
<pre><code> cd INF206-2023-DY7-RubbishRevive </pre></code>

<p> 3. Install composer </p>
<pre><code> composer install </pre></code>

<p> 4. create .env file </p>
<pre><code> cp .env.example .env </pre></code>

<p> 5. Generate key </p>
<pre><code> php artisan key:generate </pre></code>

<p> 6. create new database </p>
<pre><code> create database RubbishRevive </pre></code>

<p> 7. Setting database on .env file </p>

<p> 8. Migrate database </p>
<pre><code> php artisan migrate:fresh --seed </pre></code>

<p> 9. Install npm </p>
<pre><code> npm install </pre></code>

<p> 10. run composer library </p>
<pre><code> composer require realrashid/sweet-alert  </pre></code>

<p> 11. run npm dev </p>
<pre><code> sudo npm run dev  </pre></code>

<p> 12. run the app </p>
<pre><code> php artisan serve </pre></code>
