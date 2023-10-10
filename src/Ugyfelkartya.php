<?php

namespace HelixdigitalIo\NetlientUgyfelkartya;

use Saloon\Http\Connector;

class Ugyfelkartya extends Connector
{
    public function __construct(
        string $username,
        string $password
    ) {
        $this->withBasicAuth($username, $password);
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
