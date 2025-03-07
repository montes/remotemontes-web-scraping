<?php

namespace Javier Montes\RemotemontesWebScraping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Javier Montes\RemotemontesWebScraping\RemotemontesWebScraping
 */
class RemotemontesWebScraping extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Javier Montes\RemotemontesWebScraping\RemotemontesWebScraping::class;
    }
}
