<?php

namespace HelixdigitalIo\NetlientUgyfelkartya;

use HelixdigitalIo\NetlientUgyfelkartya\Requests\Card\GetCard;
use HelixdigitalIo\NetlientUgyfelkartya\Requests\Client\ClientDelete;
use HelixdigitalIo\NetlientUgyfelkartya\Requests\ClientInfo;
use HelixdigitalIo\NetlientUgyfelkartya\Requests\Registration;
use HelixdigitalIo\NetlientUgyfelkartya\Responses\Card\GetCard as GetCardResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Responses\Client\ClientDelete as ClientDeleteResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Responses\ClientInfo as ClientInfoResponse;
use HelixdigitalIo\NetlientUgyfelkartya\Responses\Registration as RegistrationResponse;

class Ugyfelkartya
{
    public static function register(int $storeId, string $email, string $firstName, string $lastName, string $birthDate): RegistrationResponse
    {
        $request = new Registration($storeId, $email, $firstName, $lastName, $birthDate);
        return $request->send();
    }

    public static function getClientInfo(string $email): ClientInfoResponse
    {
        $request = new ClientInfo($email);
        return $request->send();
    }

    public static function getCard(string $cardNumber): GetCardResponse
    {
        $request = new GetCard($cardNumber);
        return $request->send();
    }

    public static function deleteClient(int $clientId, int $storeId): ClientDeleteResponse
    {
        $request = new ClientDelete($clientId, $storeId);
        return $request->send();
    }
}
