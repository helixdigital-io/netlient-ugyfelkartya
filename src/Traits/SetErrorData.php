<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Traits;

use HelixdigitalIo\NetlientUgyfelkartya\Enums\ErrorCode;

trait SetErrorData
{
    public ?string $errorCode = null;
    public ?string $errorMessage = null;

    public function setErrorData(object $response): void
    {
        $this->errorCode = $response->error_code ?? null;
        $this->errorMessage = ErrorCode::getMessage($response->error_code);
    }
}
