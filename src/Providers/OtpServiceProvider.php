<?php

namespace Daan0101\LaravelOtpKit\Providers;

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
            __DIR__ . '/../config/otp.php' => \config_path('otp.php'),
        ], 'otp-config');
    }
}
