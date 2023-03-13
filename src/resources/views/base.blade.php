<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ env('APP_ICON', '') }}">

        <title>@yield('title', config('app.name', 'my app'))</title>

        @include('adminlte::layouts.partials.stylesheets')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('adminlte::layouts.partials.header')

            @include('adminlte::layouts.partials.sidebar_menu')

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">
                                    @yield('page_name', 'page_name')
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                @yield('breadcrumbs', 'breadcrumbs use Diglatic')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="container-fluid">
                        @yield('body')
                    </div>
                </div>
            </div>

            <aside class="control-sidebar control-sidebar-dark">

            </aside>

            @include('adminlte::layouts.partials.footer')
        </div>

        @include('adminlte::layouts.partials.javascripts')
    </body>
</html>
