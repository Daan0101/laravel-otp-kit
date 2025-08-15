<?php

namespace Daan0101\LaravelOtpKit;

use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '../config/otp.php' => \config_path('otp.php'),
        ], 'otp-config');

        $this->loadRoutesFrom(__DIR__.'../routes/web.php');
    }
}
