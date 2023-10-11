<?php

namespace HelixdigitalIo\NetlientUgyfelkartya;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card as CardDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Client\ClientDelete as ClientDeleteDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo as ClientInfoDto;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Registration as RegistrationDto;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\IsSuccessfulResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Traits\SetErrorData;
use JsonException;

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

    /**
     * @return $this|RegistrationDto
     * @throws GuzzleException
     * @throws JsonException
     */
    public function register(
        int $storeId,
        string $email,
        string $firstName,
        string $lastName,
        ?string $birthDate,
        ?string $zipCode
    )
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

        if ($response === null) {
            return $this;
        }

        return new RegistrationDto($response);
    }

    /**
     * @return $this|ClientInfoDto
     * @throws GuzzleException
     * @throws JsonException
     */
    public function getClientInfo(string $email)
    {
        $jsonResponse = (string)($this->client->get("clientinfo?email={$email}")->getBody());

        $response = $this->parseResponse($jsonResponse);

        if ($response === null) {
            return $this;
        }

        return new ClientInfoDto($response);
    }

    /**
     * @return $this|CardDto
     * @throws GuzzleException
     * @throws JsonException
     */
    public function getCard(string $cardNumber)
    {
        $jsonResponse = (string)($this->client->get("card/{$cardNumber}")->getBody());

        $response = $this->parseResponse($jsonResponse);

        if ($response === null) {
            return $this;
        }

        return new CardDto($response);
    }

    /**
     * @return $this|ClientDeleteDto
     * @throws GuzzleException
     * @throws JsonException
     */
    public function deleteClient(int $clientId, int $storeId)
    {
        $jsonResponse = (string)($this->client->post('client/delete', [
            'json' => [
                'client_id' => $clientId,
                'store_id' => $storeId,
            ]
        ])->getBody());

        $response = $this->parseResponse($jsonResponse);

        if ($response === null) {
            return $this;
        }

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
