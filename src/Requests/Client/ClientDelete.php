<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests\Client;

use HelixdigitalIo\NetlientUgyfelkartya\Responses\Client\ClientDelete as ClientDeleteResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Ugyfelkartya;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Request\HasConnector;

/**
 * @method ClientDeleteResponse send(MockClient|null $mockClient = null)
 */
class ClientDelete extends Request
{
    use HasConnector, HasJsonBody;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::POST;

    protected ?string $response = ClientDeleteResponse::class;

    protected int $clientId;

    protected int $storeId;

    public function __construct(
        int $clientId,
        int $storeId
    ) {
        $this->clientId = $clientId;
        $this->storeId = $storeId;
    }

    public function resolveEndpoint(): string
    {
        return '/client/delete';
    }

    public function defaultBody(): array
    {
        return [
            'client_id' => $this->clientId,
            'store_id' => $this->storeId,
        ];
    }
}
