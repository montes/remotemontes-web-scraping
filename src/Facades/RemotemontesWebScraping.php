<?php

namespace RemoteMontes\RemotemontesWebScraping\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RemoteMontes\RemotemontesWebScraping\RemotemontesWebScraping
 */
class RemotemontesWebScraping extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \RemoteMontes\RemotemontesWebScraping\RemotemontesWebScraping::class;
    }
}
