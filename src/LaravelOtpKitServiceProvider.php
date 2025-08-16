<?php

namespace daan0101\LaravelOtpKit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use daan0101\LaravelOtpKit\Commands\LaravelOtpKitCommand;

class LaravelOtpKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-otp-kit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_otp_kit_table')
            ->hasCommand(LaravelOtpKitCommand::class);
    }
}
