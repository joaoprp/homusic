
[![Total Downloads](https://poser.pugx.org/drparham/reservations/downloads.svg)](https://packagist.org/packages/drparham/framework)
[![Latest Stable Version](https://poser.pugx.org/drparham/reservations/v/stable.svg)](https://packagist.org/packages/drparham/reservations/)
[![Latest Unstable Version](https://poser.pugx.org/drparham/reservations/v/unstable.svg)](https://packagist.org/packages/drparham/reservations)

Laravel 4 Reservations Package
==============================

A Simple Package to manage a calendar reservation system


## Official Documentation

Install using Composer

Add the following to your composer.json require section: 
	"drparham/reservations": "dev-master"

Run composer update

Run migrations to create the Calendar Table in your Database:

php artisan migrate --package="drparham/reservations"

Once the package is installed and migration ran, you should have access to three end points:

GET '/unavailableDates/{user_id}'

POST '/reserveDate/{user_id}/{date}'

POST '/unreserveDate/{user_id}/{date}'

Note: 
The user_id should be the numerical ID value of your user

The date variable should be in the format of a MYSQL DATE, not TIMESTAMP or DATETIME variable. ex: 2014-08-01

Un-reserving a date soft deletes the reservation.

All responses are in JSON.


### License
This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
