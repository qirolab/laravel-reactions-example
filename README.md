# Laravel Reactions Example

This example repository shows, how to implement social reactions in Laravel
application using **[📦 laravel-reactions](https://github.com/qirolab/laravel-reactions)** package.

## Video Tutorial

 **[ ▶️ Laravel Reactions Tutorial](https://www.youtube.com/watch?v=VMaXBYYDfg8)**

## Setup

Download or clone this repo
```shell
$ git clone https://github.com/laravel-reactions-example.git
```

Install all dependency required by Laravel.
```shell
$ composer install
```

Generate app key, configure `.env` file and do migration.
```shell
# create copy of .env
$ cp .env.example .env

# create Laravel key
$ php artisan key:generate
```

Next, add your database credentials in `.env` file and then run migrations.
```shell
# run migration
$ php artisan migrate --seed
```
