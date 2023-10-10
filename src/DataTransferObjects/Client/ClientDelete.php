<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client;

class ClientDelete
{
    public string $status;

    public ?string $message;

    public function __construct(object $response)
    {
        $this->status = $response->status;
        $this->message = $response->message ?? null;
    }
}
