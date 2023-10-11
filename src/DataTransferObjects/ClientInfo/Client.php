<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo;

use Carbon\CarbonImmutable;

class Client
{
    public ?int $card;

    public int $card_type_id;

    public string $card_type_name;

    public bool $card_validity;

    public int $client_id;

    public int $webstore_id;

    public int $client_status;

    public string $email;

    public string $lastname;

    public string $firstname;

    public ?CarbonImmutable $birthdate;

    public string $nameday;

    public string $country;

    public string $zipcode;

    public string $city;

    public string $address;

    public string $mobile;

    public string $company;

    public int $store_id;

    public int $gender;

    public string $comment;

    public CarbonImmutable $registdate;

    public CarbonImmutable $activedate;

    public int $newsletter;

    public ?int $evfordulo;

    public function __construct(
        object $client
    ) {
        $this->card = $client->card;
        $this->card_type_id = $client->card_type_id;
        $this->card_type_name = $client->card_type_name;
        $this->card_validity = $client->card_validity;
        $this->client_id = $client->client_id;
        $this->webstore_id = $client->webstore_id;
        $this->client_status = $client->client_status;
        $this->email = $client->email;
        $this->lastname = $client->lastname;
        $this->firstname = $client->firstname;
        $this->birthdate = !empty($client->birthdate) ? CarbonImmutable::parse($client->birthdate) : null;
        $this->nameday = $client->nameday;
        $this->country = $client->country;
        $this->zipcode = $client->zipcode;
        $this->city = $client->city;
        $this->address = $client->address;
        $this->mobile = $client->mobile;
        $this->company = $client->company;
        $this->store_id = $client->store_id;
        $this->gender = $client->gender;
        $this->comment = $client->comment;
        $this->registdate = CarbonImmutable::parse($client->registdate);
        $this->activedate = CarbonImmutable::parse($client->activedate);
        $this->newsletter = $client->newsletter;
        $this->evfordulo = $client->evfordulo;
    }
}
