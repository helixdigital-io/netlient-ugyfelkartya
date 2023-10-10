<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client;

class ClientDelete
{
    public string $status;

    public function __construct(object $response)
    {
        $this->status = $response->status;
    }
}
