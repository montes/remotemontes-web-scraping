<?php

namespace Remotemontes\RemotemontesWebScraping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Remotemontes\RemotemontesWebScraping\RemotemontesWebScraping
 */
class RemotemontesWebScraping extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Remotemontes\RemotemontesWebScraping\RemotemontesWebScraping::class;
    }
}
