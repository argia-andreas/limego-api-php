<?php

use Grafstorm\LimeGoApi\SignalRequest;

it('returns a signal request', function () {
    $signal = new \Grafstorm\LimeGoApi\Signal(new \GuzzleHttp\Client());
    $signal->name('::test::')
        ->strength(11)
        ->note('::note::')
        ->organisation(function (\Grafstorm\LimeGoApi\Organisation $organisation) {
            $organisation->registrationNumber('::reg-nr::');
        });

    $request = SignalRequest::create($signal);
    $requestBody = json_decode((string) $request->getBody(), true);

    expect($request)->toBeInstanceOf(\GuzzleHttp\Psr7\Request::class);

    expect($requestBody)
        ->toHaveKey('name', '::test::')
        ->toHaveKey('strength', 11)
        ->toHaveKey('note', '::note::')
        ->toHaveKey('organisation', [
            'registrationNumber' => '::reg-nr::',
        ]);
});
