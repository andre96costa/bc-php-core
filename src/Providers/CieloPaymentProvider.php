<?php

namespace Beerandcode\Modulo5\Providers;

use Beerandcode\Modulo5\Providers\interfaces\PaymentProviderInterface;
use Beerandcode\Modulo5\utils\Http;

class CieloPaymentProvider implements PaymentProviderInterface
{
    public function __construct(
        Http $clientHttp
    ) {}

    
    public function charge(string $email, int $amount): string
    {
        return "We successfully charged BRL {$amount} from {$email}";
    }
}
