<?php

namespace Beerandcode\Modulo5\Base\Facades;

use Beerandcode\Modulo5\Base\Container\Container;

class Facade
{
    public static function __callStatic($method, $arguments)
    {
       $container = Container::getContainer();

       $service = $container->get(static::getFacadeAccessor());

       return $service->$method(...$arguments);
    }

    protected static function getFacadeAccessor(): string
    {
        return '';        
    }
}
