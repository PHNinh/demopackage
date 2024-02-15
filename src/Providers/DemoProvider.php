<?php

namespace Ninhpham\Demo\Providers;

use Illuminate\Support\ServiceProvider;

class DemoProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources', 'demo');
    }
}