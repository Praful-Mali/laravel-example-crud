# Laravel5.3 CRUD Example

This is a simple example of performing CRUD using Laravel 5.3 and MySql. The design used the SB Admin 2, a bootstrap theme by [Start Bootstrap](https://startbootstrap.com/).

## Documentation

### Laravel
Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### SB Admin
Source code of SB Admin Bootstrap can be found [Github](https://github.com/BlackrockDigital/startbootstrap-sb-admin-2).

## License

### Laravel
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

### SB Admin
Copyright 2013-2016 Blackrock Digital LLC. Code released under the [MIT license](https://github.com/BlackrockDigital/startbootstrap-sb-admin-2/blob/gh-pages/LICENSE).

## Installation

* `https://github.com/hectordolo/laravel-example-crud.git`
* `cd laravel-example-crud`
* `composer install`
* `php artisan key:generate`
* copy .env.example to .env
* edit .env
    * set `DB_DATABASE="YOUR DATABASE NAME"`
    * set `DB_USERNAME="YOUR DATABASE USERNAME"`
    * set `DB_PASSWORD="YOUR DATABASE PASSWORD"`
* `php artisan migrate`
* `php artisan serve`
* You can now register a new user to use the application.
