<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Traits;

trait SetErrorCodeOnError
{
    public ?string $errorCode = null;

    public function setErrorCodeOnError(object $response): void
    {
        $this->errorCode = $response->error_code ?? null;
    }
}
