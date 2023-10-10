<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Responses\Card;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card as CardDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorCodeOnError;
use JsonException;
use Saloon\Http\Response;

class GetCard extends Response
{
    use IsSuccessfulResponse, SetErrorCodeOnError;

    /**
     * @throws JsonException
     */
    public function card(): ?CardDto
    {
        $response = $this->object();

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorCodeOnError($response);

            return null;
        }

        return new CardDto($response);
    }
}
