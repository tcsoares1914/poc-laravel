## POC-LARAVEL

REST API using Laravel, MySQL and FrankenPHP.


<!-- TOC depthFrom:1 depthTo:6 withLinks:1 updateOnSave:1 orderedList:0 -->

- Content
    - [Installation](#installation)
    - [Running](#running)

<!-- /TOC -->

<!-- TOC depthFrom:1 depthTo:6 withLinks:1 updateOnSave:1 orderedList:0 -->
## Stack <a name="stack"></a>
- Used in this project:
  - [PHP](https://php.net)
  - [Laravel](https://laravel.com)
  - [MySQL](https://www.mysql.com/)
  - [FrankenPHP](https://frankenphp.dev/)

<!-- /TOC -->

## Installation <a name="installation"></a>

Clone repository

```bash
# Using SSL method.
$ git clone git@github.com:tcsoares1914/poc-laravel.git
```

Access repository directory.

```bash
# Copy .env.example as .env.
$ cd poc-laravel/
```

Make a copy of .env for project.

```bash
# Copy .env.example as .env.
$ cp .env.example .env
```

## Running <a name="running"></a>

Make shure you have [Docker](https://docs.docker.com/engine/install/) and [Docker Compose](https://docs.docker.com/compose/install/) installed.

Build the app image with the following command:

```bash
# Build application image.
$ docker compose build app  
```

Run the environment in background mode with:

```bash
# Run the environment in background mode with.
$ docker compose up -d 
```

Install dependencies with [Compser](http://getcomposer.org).

```bash
# Enter into containner.
$ docker compose exec app composer install
```

Generate a unique application key with the artisan Laravel command-line tool

```bash
# Enter into containner.
$ docker compose exec app php artisan key:generate
```

In case you are running this application on your local machine, use http://localhost:8000 to access the application from your browser.

```bash
# Test
http://localhost:8000
```

