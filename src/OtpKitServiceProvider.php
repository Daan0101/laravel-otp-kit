<?php

namespace Daan0101\LaravelOtpKit;

use Daan0101\LaravelOtpKit\Console\InstallCommand;
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

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
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
            __DIR__ . '/../database/migrations/0000_00_00_000000_create_otp_table.php' => database_path('migrations/0000_00_00_000000_create_otp_table.php'),
        ], 'otp-migrations');
    }
}
