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
```

Create a view. Example: dashboard.blade.php and extend the base layout.
```php
@extends('base')

@section('page_name')
    Dashboard
@endsection

@section('body')
    write a code
@endsection
```

For add a stylesheet or javascript, use tag `@push()`
```php
@push('stylesheets')
    write a stylesheet
@endpush

@push('javascripts')
    write a javascript
@endpush
```

Full code for dashboard.blade.php
```php
@extends('base')

@push('stylesheets')
    write a stylesheet
@endpush

@section('page_name')
    Dashboard
@endsection

@section('body')
    write a code
@endsection

@push('javascripts')
    write a javascript
@endpush
```

## Customize the layout
You can custom the layout. Tutorial:
1. Create a folder `vendor` in the folder `views`
2. Create a folder `adminlte` in the folder `vendor`
3. Create a file blade.php according to what you want to change

## Dev Test

```cli
./vendor/bin/phpunit tests
```
