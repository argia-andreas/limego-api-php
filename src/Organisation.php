<?php

namespace Grafstorm\LimeGoApi;

class Organisation
{
    public function __construct(public ?string $name = null, public ?string $registrationNumber = null, public ?string $vatNumber = null)
    {
    }

    public function name($name)
    {
        $this->name = $name;
    }

    public function registrationNumber($regNmbr)
    {
        $this->registrationNumber = $regNmbr;
    }

    public function vatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    public function toArray()
    {
        $organisation = [
            'registrationNumber' => $this->registrationNumber,
            'vatNumber' => $this->vatNumber,
            'name' => $this->name,
        ];

        // Only keep non-empty values by using array_filter
        return array_filter($organisation);
    }
}
