<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Products CRUD App

A simple CRUD application built with **Laravel 10**, **Eloquent ORM**, **MySQL**, and **Bootstrap 5**.  
Features include:

- User authentication (email/password) without Breeze.
- Product management (create, list, view, edit, delete).
- File uploads for product images.
- Basic validation and CSRF protection.
- Bootstrap 5 styling.
- Laravel pagination with Bootstrap 5 styling.

---


## Setup Instructions

1. **Clone the repository**:
```bash
git clone <your-repo-url>
cd <your-repo-folder>

```

2. **Install dependencies**:
```bash
composer install
```

3. **Configure environment variables**:

```
APP_NAME=Laravel
APP_URL=http://localhost
APP_KEY=base64:GENERATE_YOUR_KEY
APP_DEBUG=true

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_app
DB_USERNAME=root
DB_PASSWORD=yourpassword

```
Generate the app key:
```bash
php artisan key:generate
```
4. **Run Migration**:
```bash
php artisan migrate
```
5. **Seed the Database**:
```bash
php artisan db:seed
```

6. **Serve the application**:
```bash
php artisan db:seed