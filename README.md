<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Installation

### Docker

Highly recommended way to install this app is Laravel Sail - built-in solution for running your Laravel project using Docker. 
You can find more details on official Laravel documentation: https://laravel.com/docs/8.x/installation#your-first-laravel-project.

Clone this app from github and run install.sh. If you see this error:

```
Sail is not running.

You may Sail using the following commands: './vendor/bin/sail up' or './vendor/bin/sail up -d'
```
you may need to run `./vendor/bin/sail build`, and then run install.sh one more time.

**After installation is complete, copy and past Application ENV key from the console output to .env APP_KEY variable.**

### Composer

You can also install PHP 8 and Composer on your computer:
https://laravel.com/docs/8.x/installation#installation-via-composer

Using this method, you have to have working and configured database. Please visit `/install` for installation wizard or edit .env file manually. 
You may want to use SQLite: https://laravel.com/docs/8.x/database#sqlite-configuration

Clone this app from github and run:

```
cd example-app

cp .env.example .env

composer install

php artisan key:generate

php artisan serve

php artisan migrate:fresh --seed
```

## Usage

Don't forget to install npm packages and compile assets.

This app use Inertia.js as a new approach to building classic server-driven web apps. We call it the modern monolith. Inertia has no client-side routing, nor does it require an API. Below you can find docs:

https://inertiajs.com

To access user favorites data, use `Inertia.usePage()`.

## Directories

All frontend files are placed in `resources` directory.

```
resources/
├── css
│   └── app.css
├── js
│   ├── App.tsx
│   ├── Pages
│   │   └── DayOffer.tsx
│   ├── app.ts
│   └── types.ts
```

## Routes

`GET /` - Day offer page <br>
`PUT /{product.id}` - Add product to favorites <br>
`DELETE /{product.id}` - Remove product from favorites <br>

For PUT and DELETE requests please use Inertia methods:
https://inertiajs.com/manual-visits
