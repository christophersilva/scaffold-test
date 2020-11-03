# Scaffold Test

This project is a problem resolution to possible contatation at Scaffold Education. This project was built using Laravel 8.x version.

## Problem

We need to create a web application that has teachers and students users. Teachers insert Youtube videos to students watch.

- The code must be public on Github or private and shared with @lgthomazelli;
- The application must has login;
- Students should be able to sign up;
- Students should be able to watch videos directly on application;
- Only teachers can insert/update/destroy videos;
- Teachers can be created by seeders on project start;
- Teachers must has a list with all students on application.

Differentials

- Usage of Laravel framework on last versions;
- Usage of VueJs to frontend.

## Requirements

- PHP >= 7.3
- Mysql 5.7

## Installation

First of all you will need to create a database called `scaffold_test`. Then, run in your terminal:

```bash
$ git clone https://github.com/christophersilva/scaffolfd-test.git
$ cd scaffold-test
$ composer install
$ php artisan migrate
$ php artisan db:seed
$ php artisan storage:link
$ php artisan serve
```

After this, a default teacher user is created and you can login with email: `prof@mail.com`and password: `123123123`
