<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests\Client;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Connectors\Ugyfelkartya;
use HelixdigitalIo\NetlientUgyfelkartya\Enums\CardType;
use HelixdigitalIo\NetlientUgyfelkartya\Responses\Client\SetCardType as SetCardTypeResponse;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Request\HasConnector;

/**
 * @method SetCardTypeResponse send(MockClient|null $mockClient = null)
 */
class SetCardType extends Request implements HasBody
{
    use HasConnector, HasJsonBody;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::POST;

    protected ?string $response = SetCardTypeResponse::class;

    protected int $clientId;

    protected int $cardType;

    /**
     * @throws Exception Throws an exception if the card type is invalid.
     */
    public function __construct(
        int $clientId,
        int $cardType
    ) {
        $this->clientId = $clientId;

        if (CardType::validate($cardType)) {
            $this->cardType = $cardType;
        }
    }

    public function resolveEndpoint(): string
    {
        return '/clientupdate';
    }

    public function defaultBody(): array
    {
        return [
            'client_id' => $this->clientId,
            'client' => [
                'card_type' => $this->cardType,
            ],
        ];
    }
}
