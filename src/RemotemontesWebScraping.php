<?php

namespace Remotemontes\RemotemontesWebScraping;

use Illuminate\Support\Facades\Http;

class RemotemontesWebScraping
{
    public function __construct(
        protected array $options = []
    ) {
        $this->options = array_merge(config('remotemontes-web-scraping.default_options'), $options);
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function scrape(string $url): array
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($url, $this->options);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Failed to scrape the URL, response: ['.$response->status().'] '.$response->body());
    }
}
