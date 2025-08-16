<?php

namespace Daan0101\LaravelOtpKit\Commands;

use Illuminate\Console\Command;

class InstallOtpKit extends Command
{
    protected $signature = 'otp:install';

    protected $description = 'Install the OTP package';

    public function handle()
    {
        $this->info('Installing the OTP package...');

        $this->call('vendor:publish', [
            '--tag' => 'otp-config',
            '--force' => true
        ]);

        $this->info('Publishing OTP migrations...');
        $this->call('vendor:publish', [
            '--tag' => 'otp-migrations',
            '--force' => true
        ]);

        $this->call('migrate');

        $this->info('Installed OTP package successfully.');
    }
}
