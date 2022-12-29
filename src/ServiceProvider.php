<?php

namespace Ybzc\Laravel\User;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    private $_packageTag = 'user';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views/', $this->_packageTag);
        $this->mergeConfigFrom(__DIR__.'/config/'.$this->_packageTag.'.php', $this->_packageTag);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/laravelusers.php' => config_path('laravelusers.php'),
        ],'laravelusers');
    }
}
