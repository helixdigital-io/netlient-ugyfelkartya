<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses\Client;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client\SetCardType as SetCardTypeDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorData;
use JsonException;
use Saloon\Http\Response;

class SetCardType extends Response
{
    use IsSuccessfulResponse, SetErrorData;

    /**
     * @throws JsonException
     */
    public function result(): ?SetCardTypeDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorData($response);

            return null;
        }

        return new SetCardTypeDto($response);
    }
}
