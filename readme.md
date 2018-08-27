<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation

- git clone https://github.com/Siiriirat/Gallery.git
- cd Gallery
- Create a database and Create file ".env" in Gallery Folder
  <p>DB_DATABASE=gallery_db</p>
  <p>DB_USERNAME=root</p>
  <p>DB_PASSWORD=""</p>
- Open command in Gallery
  <p>composer update</p>
  <p>php artisan key:generate</p>
  <p>php artisan migrate</p>
  <p>php artisan db:seed</p>
  <p>php artisan serve</p>
  <p>start the app on http://localhost:8000/Homepage</p>
