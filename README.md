# Sistem Manajemen Stok

## A Laravel implementation for simple management storage system

## Features
- Manage Products (Create, Read, Delete)
- Manage Categories
- Manage Suppliers
- Stock History
- Auto warning for low stock

## Requirements
- PHP 8.2+
- MySQL
- Composer

## Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Open http://localhost:8000

## Tech
- Laravel 12
- MySQL
- PHP 8.2
