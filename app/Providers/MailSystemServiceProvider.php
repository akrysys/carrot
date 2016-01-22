<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MailSystemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //レスポンスカスタマイズ
        $this->app->bind(
            'Response',
            'App\Libs\Response'
        );
        //システム共通
        $this->app->bind(
            'MailSystem',
            'App\Service\MailSystem'
        );
        //共通関数
        $this->app->bind(
            'Common',
            'App\Service\Common'
        );
    }
}
