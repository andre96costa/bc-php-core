<?php

use Beerandcode\Modulo5\Base\Container\Container;
use Beerandcode\Modulo5\Base\Facades\Facade;
use Beerandcode\Modulo5\Facades\Stripe;
use Beerandcode\Modulo5\Providers\CieloPaymentProvider;
use Beerandcode\Modulo5\Providers\interfaces\PaymentProviderInterface;
use Beerandcode\Modulo5\Providers\PaddlePaymentProvider;
use Beerandcode\Modulo5\Services\Checkout;
use Beerandcode\Modulo5\utils\Http;

require __DIR__.'/../vendor/autoload.php';

$service = new Checkout('andre@andre.com', 9000);

$container = new Container;
$container->register(PaymentProviderInterface::class, PaddlePaymentProvider::class);

$paymentProvider = $container->get(PaymentProviderInterface::class);

echo $service->handle($paymentProvider);

echo "\n";

echo Stripe::charge('andre@andre.com', 9000);