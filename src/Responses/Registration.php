<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Registration as RegistrationDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorCodeOnError;
use JsonException;
use Saloon\Http\Response;

class Registration extends Response
{
    use IsSuccessfulResponse, SetErrorCodeOnError;

    /**
     * @throws JsonException
     */
    public function user(): ?RegistrationDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorCodeOnError($response);

            return null;
        }

        return new RegistrationDto($response);
    }
}
