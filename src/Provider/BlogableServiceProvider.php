<?php
namespace Mshukurlu\Blogable\Provider;

use Illuminate\Support\ServiceProvider;

class BlogableServiceProvider extends ServiceProvider
{
    public function register()
    {
     //   if ($this->app->runningInConsole()) {
            // Publish assets
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('blogable'),
            ], 'assets');

      //  }
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'blogable');
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blogable');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
