<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo as ClientInfoDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorData;
use JsonException;
use Saloon\Http\Response;

class ClientInfo extends Response
{
    use IsSuccessfulResponse, SetErrorData;

    /**
     * @throws JsonException
     */
    public function clientInfo(): ?ClientInfoDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorData($response);

            return null;
        }

        return new ClientInfoDto($response);
    }
}
