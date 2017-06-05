<?php

namespace Termiyanc\Moactiontest;

use Illuminate\Support\ServiceProvider;

class MoactiontestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //  Добавляю конфигурацию пакета в общую конфигурацию
        $this->mergeConfigFrom(__DIR__.'/app/config.php', 'termiyanc_moaction_test');
        //  Публикую папки database, public
        $this->publishes([__DIR__.'/public' => public_path('termiyanc/moactiontest')]);
        $this->publishes([__DIR__.'/database' => database_path('termiyanc/moactiontest')]);
        //  Подключаю маршрутизацию пакета
        require_once __DIR__.'/app/route.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
