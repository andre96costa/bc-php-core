<?php

namespace Beerandcode\Modulo5\Providers;

use Beerandcode\Modulo5\Providers\interfaces\PaymentProviderInterface;
use Beerandcode\Modulo5\utils\Http;

class PaddlePaymentProvider implements PaymentProviderInterface
{
    public function __construct(
        Http $clientHttp
    ) {}

    
    public function charge(string $email, int $amount): string
    {
        return "We successfully charged EUR {$amount} from {$email}";
    }
}
