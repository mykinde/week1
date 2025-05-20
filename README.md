# Laravel Starter


[Documentation Link- ChatGPT](https://chatgpt.com/share/682c3f05-3a14-8004-9a92-4983891c397f)

[My Site](https://mykinde.github.io/site/)


## About Repository

A very simple Laravel 12 + Vue 3 + AdminLTE 3 based Curd Starter template for SPA Application.
<p align="center">
<img src="https://i.imgur.com/ZW5gU3V.png">

</p>

## Tech Specification

- Laravel 12
- React/Vue + VueRouter
- Laravel Breeze
- Admin LTE 3 + Bootstrap 4 + Font Awesome 5
- PHPUnit Test Case/Test Coverage
- Moodle LMS + AI

## Features

- Frontend and Backend User ACL with Gate Policy (type: admin/user)


## Installation

- `git clone https://github.com/mykinde/week1.git`
- `cd laravel-starter/`
- `composer install`
- `cp .env.example .env`
- Update `.env` and set your database credentials
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `php artisan passport:install`
- `npm install`
- `npm run dev`
- `php artisan serve`

## Install with Docker


- Application http://localhost:8000/
- Adminer for Database http://localhost:8000/



## Unit Test

#### run PHPUnit

```bash
# run PHPUnit all test cases
vendor/bin/phpunit
# or Feature test only
vendor/bin/phpunit --testsuite Feature
```

#### Code Coverage Report

```bash
# reports is a directory name
vendor/bin/phpunit --coverage-html reports/
```
A `reports` directory has been created for code coverage report. Open the dashboard.html.


## Credit
This repository is motivated by [mykinde/week1](https://github.com/mykinde/week1.git) and his awesome video tutorial in [Youtube](https://www.youtube.com/playlist?list=PLE6CJ8yYNo7LvHjVBWX0fjeb5A7nWimzj).

## License

[MIT license](https://opensource.org/licenses/MIT).