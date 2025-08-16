<?php

namespace daan0101\LaravelOtpKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \daan0101\LaravelOtpKit\LaravelOtpKit
 */
class LaravelOtpKit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \daan0101\LaravelOtpKit\LaravelOtpKit::class;
    }
}
