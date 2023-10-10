<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Requests;

use HelixdigitalIo\NetlientUgyfelkartya\Responses\Registration as RegistrationResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Ugyfelkartya;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Saloon\Traits\Request\HasConnector;

/**
 * @method RegistrationResponse send(MockClient|null $mockClient = null)
 */
class Registration extends Request
{
    use HasConnector, HasJsonBody;

    protected string $connector = Ugyfelkartya::class;

    protected Method $method = Method::POST;

    protected ?string $response = RegistrationResponse::class;

    protected int $storeId;

    protected string $email;

    protected string $firstName;

    protected string $lastName;

    protected string $birthDate;

    public function __construct(
        int $storeId,
        string $email,
        string $firstName,
        string $lastName,
        string $birthDate
    ) {
        $this->storeId = $storeId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }

    public function resolveEndpoint(): string
    {
        return '/registration';
    }

    public function defaultBody(): array
    {
        return [
            'store_id' => $this->storeId,
            'email' => $this->email,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'birth_date' => $this->birthDate,
        ];
    }
}
