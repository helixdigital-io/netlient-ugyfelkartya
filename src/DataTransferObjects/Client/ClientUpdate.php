<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client;

class ClientUpdate
{
    public string $status;

    public function __construct(object $response)
    {
        $this->status = $response->status;
    }
}
