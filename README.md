# Laravel Mongo Models

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chaoswd/laravel-mongo-models.svg?style=flat-square)](https://packagist.org/packages/chaoswd/laravel-mongo-models) [![Total Downloads](https://img.shields.io/packagist/dt/chaoswd/laravel-mongo-models.svg?style=flat-square)](https://packagist.org/packages/chaoswd/laravel-mongo-models) [![GitHub Stars](https://img.shields.io/github/stars/ChaosWebDev/LaravelMongoModels?style=flat-square)](https://github.com/ChaosWebDev/LaravelMongoModels/stargazers) [![GitHub License](https://img.shields.io/github/license/ChaosWebDev/LaravelMongoModels?style=flat-square)](LICENSE)

A lightweight Laravel package that adds an Artisan command for generating MongoDB Eloquent models...

---

## 🚀 Installation

You can install the package via Composer:

```bash
composer require chaoswd/laravel-mongo-models
```

> Tested on Laravel 12.x.  
> Likely compatible with Laravel 10 and 11, but unverified.
> Requires the [`mongodb/laravel`](https://github.com/mongodb/laravel) driver installed.

---

## ⚙️ Usage

Generate a MongoDB model using the custom Artisan command:

```bash
php artisan make:mongo:model {name} --collection="collectionName"
```

### Example

```bash
php artisan make:mongo:model User --collection="users"
```

This command will create a model at:

```
app/Models/User.php
```

with the following structure:

```php
<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'users';

    protected $guarded = [];
}
```

---

## 🧩 Features

- 🔹 Generates MongoDB-compatible Eloquent models  
- 🔹 Uses the official `mongodb/laravel` driver  
- 🔹 Automatically sets `connection` and `collection` properties  
- 🔹 Simple, framework-native syntax  

---

## 🧰 Requirements

- PHP 8.2+  
- Laravel 12.*  
- [`mongodb/laravel`](https://github.com/mongodb/laravel)

---

## 🧾 License

This package is open-sourced software licensed under the [MIT License](LICENSE).  
© Jordan Gerber DBA [Chaos Web Development](https://github.com/ChaosWebDev)

---

## 🕒 Changelog

See the [CHANGELOG.md](CHANGELOG.md) for version history and release notes.

---

## 💬 Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss your ideas.  
Please make sure to update tests as appropriate.

---

**Created with 🌀 by [Chaos Web Development](https://github.com/ChaosWebDev)**
