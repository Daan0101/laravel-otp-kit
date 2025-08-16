<?php

namespace Daanp\LaravelOtpKit;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OtpService
{
    public static function test() {
        \Log::info('Testing OTP Service');
    }

    public static function generate() {
        $length = config('otp.length', 6);
        $OtpCode = Str::random($length);
        \Log::info('Generated Otp: ' . $OtpCode . ' with length: ' . $length);
    }
}
