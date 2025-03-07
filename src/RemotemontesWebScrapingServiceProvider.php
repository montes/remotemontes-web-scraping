<?php

namespace RemoteMontes\RemotemontesWebScraping;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RemoteMontes\RemotemontesWebScraping\Commands\RemotemontesWebScrapingCommand;

class RemotemontesWebScrapingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('remotemontes-web-scraping')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_remotemontes_web_scraping_table')
            ->hasCommand(RemotemontesWebScrapingCommand::class);
    }
}
