<?php

namespace Beerandcode\Modulo5\Facades;

use Beerandcode\Modulo5\Base\Facades\Facade;
use Beerandcode\Modulo5\Providers\StripePaymentProvider;

class Stripe extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return StripePaymentProvider::class;        
    }
}
