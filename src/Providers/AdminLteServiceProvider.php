<?php

namespace Zulhamfendhy\Adminlte\Providers;

use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminlte');

        $this->publishes([
            __DIR__.'../public' => public_path('vendor/Zulhamfendhy'),
        ], 'public');
    }
}
