<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses\Client;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client\ClientDelete as ClientDeleteDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorCodeOnError;
use JsonException;
use Saloon\Http\Response;

class ClientDelete extends Response
{
    use IsSuccessfulResponse, SetErrorCodeOnError;

    /**
     * @throws JsonException
     */
    public function result(): ?ClientDeleteDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorCodeOnError($response);

            return null;
        }

        return new ClientDeleteDto($response);
    }
}
