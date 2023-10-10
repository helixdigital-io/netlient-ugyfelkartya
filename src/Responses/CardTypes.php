<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes as CardTypesDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorCodeOnError;
use JsonException;
use Saloon\Http\Response;

class CardTypes extends Response
{
    use IsSuccessfulResponse, SetErrorCodeOnError;

    /**
     * @throws JsonException
     */
    public function cardTypes(): ?CardTypesDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorCodeOnError($response);

            return null;
        }

        return new CardTypesDto($response);
    }
}
