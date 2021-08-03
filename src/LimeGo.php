<?php

namespace Grafstorm\LimeGoApi;

use GuzzleHttp\Client;

class LimeGo
{
    protected Client $client;

    public function __construct(protected string $apiKey)
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.lime-go.com/v1/',
            'headers' => [
                'Authorization' => 'go-api:' . $this->apiKey . '',
                'Content-Type' => 'application/json'
            ],
            // You can set any number of default request options.
            'timeout'  => 15.0,
        ]);
    }

    public function signal(): Signal
    {
        return new Signal($this->client);
    }
}
