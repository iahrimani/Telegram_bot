<?php

namespace App\Providers;

use App\Helpers\Telegram;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//      Если вызываем класс "телеграмм" в приложении, он автоматом создаёт экземпляр его класса
        $this->app->bind(Telegram::class, function ($app){
            return new Telegram(new Http(), config('bots.bot'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
