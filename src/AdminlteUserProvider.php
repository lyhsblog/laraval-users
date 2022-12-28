<?php

namespace Ybzc\Laravel\AdminlteUser;

use Illuminate\Support\ServiceProvider;

class AdminlteUserProvider extends ServiceProvider
{
    private $_packageTag = 'laraveladminlteuser';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views/', $this->_packageTag);
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
            __DIR__ . '/config/adminlte.php' => config_path('adminlte.php'),
        ],'adminlte');
        $this->publishes([
            __DIR__ . '/config/laravelusers.php' => config_path('laravelusers.php'),
        ],'laravelusers');
    }
}
