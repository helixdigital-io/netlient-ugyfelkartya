<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests;

use HelixdigitalIo\NetlientUgyfelkartya\Responses\ClientInfo as ClientInfoResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Connectors\Ugyfelkartya;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Request\HasConnector;

/**
 * @method ClientInfoResponse send(MockClient|null $mockClient = null)
 */
class ClientInfo extends Request
{
    use HasConnector;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::GET;

    protected ?string $response = ClientInfoResponse::class;

    protected string $email;

    public function __construct(
        string $email
    ) {
        $this->email = $email;
    }

    public function resolveEndpoint(): string
    {
        return '/clientinfo';
    }

    protected function defaultQuery(): array
    {
        return [
            'email' => $this->email,
        ];
    }
}
