<?php

use Daan0101\LaravelOtpKit\OtpController;
use Illuminate\Support\Facades\Route;

Route::get('/otp/test', [OtpController::class, 'test']);