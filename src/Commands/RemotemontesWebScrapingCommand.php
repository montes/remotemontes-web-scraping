<?php

namespace Javier Montes\RemotemontesWebScraping\Commands;

use Illuminate\Console\Command;

class RemotemontesWebScrapingCommand extends Command
{
    public $signature = 'remotemontes-web-scraping';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
