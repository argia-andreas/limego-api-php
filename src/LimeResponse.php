<?php

namespace Grafstorm\LimeGoApi;

use GuzzleHttp\Psr7\Response;

class LimeResponse
{
    public function __construct(public string $status)
    {
    }

    public static function fromResponse(Response $response): self
    {
        return new self('ok');
    }
}
