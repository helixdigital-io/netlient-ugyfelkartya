<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests\Card;

use HelixdigitalIo\NetlientUgyfelkartya\Responses\Card\GetCard as GetCardResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Ugyfelkartya;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Request\HasConnector;

/**
 * @method GetCardResponse send(MockClient|null $mockClient = null)
 */
class GetCard extends Request
{
    use HasConnector;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::GET;

    protected ?string $response = GetCardResponse::class;

    protected $cardNumber;

    public function resolveEndpoint(): string
    {
        return "/card/$this->cardNumber";
    }
}
