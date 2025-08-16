<?php

namespace daan0101\LaravelOtpKit\Commands;

use Illuminate\Console\Command;

class LaravelOtpKitCommand extends Command
{
    public $signature = 'laravel-otp-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
