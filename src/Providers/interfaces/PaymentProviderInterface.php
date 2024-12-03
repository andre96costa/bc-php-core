<?php

namespace Beerandcode\Modulo5\Providers\interfaces;

use Beerandcode\Modulo5\utils\Http;

interface PaymentProviderInterface
{
    public function __construct(Http $httpClient);

    public function charge(string $email, int $mount): string;
}
