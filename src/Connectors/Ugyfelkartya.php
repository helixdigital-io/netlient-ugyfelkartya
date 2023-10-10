<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Connectors;

use Saloon\Http\Connector;

class Ugyfelkartya extends Connector
{
    public function __construct()
    {
        $this->withBasicAuth($_ENV['API_USERNAME'], $_ENV['API_PASSWORD']);
    }

    public function resolveBaseUrl(): string
    {
        return 'https://www.ugyfelkartya.hu/api';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json;charset=UTF-8',
            'Accept' => 'application/json',
        ];
    }
}
