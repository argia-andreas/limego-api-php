<?php

namespace Grafstorm\LimeGoApi;

use GuzzleHttp\Psr7\Request;

class SignalRequest
{
    public static function create(Signal $signal): Request
    {
        $body = [
            'name' => $signal->name,
            'strength' => $signal->strength,
            'note' => $signal->note,
        ];

        if ($signal->organisation ?? null) {
            $body['organisation'] = $signal->organisation->toArray();
        }

        if ($signal->person ?? null) {
            $body['person'] = $signal->person->toArray();
        }

        return new Request('POST', 'signal', body: json_encode($body));
    }
}
