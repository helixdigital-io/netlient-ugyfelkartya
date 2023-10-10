<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects;

class Registration
{
    public string $status;

    public int $client_id;

    public function __construct(object $response)
    {
        $this->status = $response->status;
        $this->client_id = $response->client_id;
    }
}
