# Admin Lte

[![PHP Composer](https://github.com/zulhamfendhy/laravel-adminlte/actions/workflows/php.yml/badge.svg)](https://github.com/zulhamfendhy/laravel-adminlte/actions/workflows/php.yml)
[![Downloads](https://img.shields.io/packagist/dt/zulhamfendhy/adminlte)](https://packagist.org/packages/zulhamfendhy/adminlte)
[![Latest Stable Version](https://img.shields.io/packagist/v/zulhamfendhy/adminlte)](https://packagist.org/packages/zulhamfendhy/adminlte)
[![License](https://img.shields.io/packagist/l/zulhamfendhy/adminlte)](https://packagist.org/packages/zulhamfendhy/adminlte)

 Admin LTE by zulhamfendhy

## Installation

```cli
composer require zulhamfendhy/adminlte
```

```cli
php artisan vendor:publish --tag=zulhamfendhy-adminlte
```

## Usage

Create a base template view. Example: base.blade.php

```php
@extends('adminlte::base')

@push('stylesheets')

@endpush

@push('javascripts')

@endpush
```

## Dev Test

```cli
./vendor/bin/phpunit tests
```
