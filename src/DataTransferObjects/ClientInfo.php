<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo\Client;

class ClientInfo
{
    public string $status;

    public Client $client;

    public function __construct(object $response)
    {
        $this->status = $response->status;
        $this->client = new Client($response->client);
    }
}
