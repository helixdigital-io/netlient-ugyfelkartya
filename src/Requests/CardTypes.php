<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests;

use HelixdigitalIo\NetlientUgyfelkartya\Responses\CardTypes as CardTypesResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Connectors\Ugyfelkartya;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Request\HasConnector;

/**
 * @method CardTypesResponse send(MockClient|null $mockClient = null)
 */
class CardTypes extends Request
{
    use HasConnector;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::GET;

    protected ?string $response = CardTypesResponse::class;

    public function resolveEndpoint(): string
    {
        return '/cardtypes';
    }
}
