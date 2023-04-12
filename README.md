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

## Usage

```php
use Diolan12\Dijkstra\Dijkstra;

$dijkstra = new Dijkstra();

// Add vertices and edges
$dijkstra->addVertex('A', ['B' => 3, 'C' => 2]);
$dijkstra->addVertex('B', ['A' => 3, 'C' => 1, 'D' => 5]);
$dijkstra->addVertex('C', ['A' => 2, 'B' => 1, 'D' => 6]);
$dijkstra->addVertex('D', ['B' => 5, 'C' => 6]);

$paths = $dijkstra->findShortestPath('A', 'D'); // [A, C, D]
```

## Dev Test

```cli
./vendor/bin/phpunit tests
```
