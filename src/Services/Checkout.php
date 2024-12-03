<?php

namespace Beerandcode\Modulo5\Services;

use Beerandcode\Modulo5\Providers\interfaces\PaymentProviderInterface;

class Checkout
{
    public function __construct(
        private string $email, 
        private int $amount
    ){}

    public function handle(PaymentProviderInterface $paymentProvider): mixed
    {
        return $paymentProvider->charge($this->email, $this->amount);
    }
}
