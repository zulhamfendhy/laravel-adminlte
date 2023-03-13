<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="@yield('app_icon')">

        <title>
            @yield('title', config('app.name', 'my app'))
        </title>

        @include('adminlte::layouts.partials.stylesheets')

    </head>

    <body class="hold-transition login-page">
        @yield('body')

        @include('adminlte::layouts.partials.javascripts')
    </body>
</html>
