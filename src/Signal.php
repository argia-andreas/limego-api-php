<?php

namespace Grafstorm\LimeGoApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Signal
{
    public string $name;
    public int $strength = 50;
    public string $note = '';
    public Organisation $organisation;
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function strength(int $strength = 50): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function note(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function organisation(callable $setupOrganisation): self
    {
        $this->organisation = new Organisation();
        $setupOrganisation($this->organisation);

        return $this;
    }

    public function withOrganisation()
    {
    }

    /**
     * @throws \Exception
     */
    public function send(): LimeResponse
    {
        try {
            $response = $this->client->send(SignalRequest::create($this));

            return LimeResponse::fromResponse($response);
        } catch (GuzzleException $e) {
            throw new \Exception('Guzzle is not happy...');
        }
    }
}
