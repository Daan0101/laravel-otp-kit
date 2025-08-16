<?php

namespace Daan0101\LaravelOtpKit;

use Illuminate\Support\ServiceProvider;

class OtpKitServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton('otp', function ($app) {
            return new OtpService();
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/otp.php' => config_path('otp.php'),
        ], 'otp-config');

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'otp-migrations');
    }
}
