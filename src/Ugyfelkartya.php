<?php

namespace HelixdigitalIo\NetlientUgyfelkartya;

use GuzzleHttp\Client;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card as CardDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client\ClientDelete as ClientDeleteDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo as ClientInfoDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Registration as RegistrationDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorData;

class Ugyfelkartya
{
    use IsSuccessfulResponse, SetErrorData;

    private Client $client;
    private string $baseUrl = 'https://www.ugyfelkartya.hu/api/';

    /** @var array<string, string> */
    private array $headers = [
        'Content-Type' => 'application/json;charset=UTF-8',
        'Accept' => 'application/json',
    ];

    public function __construct() {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => $this->headers,
            'auth' => [
                $_ENV['API_USERNAME'],
                $_ENV['API_PASSWORD']
            ]
        ]);
    }

    public function register(
        int $storeId,
        string $email,
        string $firstName,
        string $lastName,
        ?string $birthDate,
        ?string $zipCode
    ): ?RegistrationDto
    {
        $body = [
            'store_id' => $storeId,
            'e_mail' => $email,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'activate_card' => true,
            'get_virtualcard' => true,
        ];

        if (!empty($birthDate)) {
            $body['birthdate'] = $birthDate;
        }

        if (!empty($zipCode)) {
            $body['zip_code'] = $zipCode;
        }

        $jsonResponse = (string)($this->client->post('registration', [
            'json' => $body
        ])->getBody());

        $response = $this->parseResponse($jsonResponse);

        return new RegistrationDto($response);
    }

    public function getClientInfo(string $email): ?ClientInfoDto
    {
        $jsonResponse = (string)($this->client->get("clientinfo?email={$email}")->getBody());

        $response = $this->parseResponse($jsonResponse);

        return new ClientInfoDto($response);
    }

    public function getCard(string $cardNumber): ?CardDto
    {
        $jsonResponse = (string)($this->client->get("card/{$cardNumber}")->getBody());

        $response = $this->parseResponse($jsonResponse);

        return new CardDto($response);
    }

    public function deleteClient(int $clientId, int $storeId): ?ClientDeleteDto
    {
        $jsonResponse = (string)($this->client->post('client/delete', [
            'json' => [
                'client_id' => $clientId,
                'store_id' => $storeId,
            ]
        ])->getBody());

        $response = $this->parseResponse($jsonResponse);

        return new ClientDeleteDto($response);
    }

    private function parseResponse(string $jsonResponse) {
        $response = json_decode($jsonResponse, false, 512, JSON_THROW_ON_ERROR);

        if (!$this->isSuccessfulResponse($response)) {
            $this->setErrorData($response);

            return null;
        }

        return $response;
    }
}
