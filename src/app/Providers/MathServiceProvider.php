<?php

namespace Laramind\Math\Providers;

use Illuminate\Support\ServiceProvider;

class MathServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../../routes/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make("Laramind\Math\Http\Controllers\MathController");
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'math');
    }
}
