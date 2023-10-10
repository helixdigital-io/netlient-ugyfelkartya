<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\ClientInfo;

class Client
{
    public int $card;
    public int $client_id;
    public int $webstore_id;
    public int $client_status;
    public string $email;
    public string $lastname;
    public string $firstname;
    public string $birthdate;
    public int $nameday;
    public int $zipcode;
    public string $city;
    public string $address;
    public string $mobile;
    public string $company;
    public int $store_id;
    public int $gender;
    public string $comment;
    public string $registdate;
    public string $activedate;
    public int $newsletter;
    public function __construct(
        object $client
    ) {
        $this->card = $client->card;
        $this->client_id = $client->client_id;
        $this->webstore_id = $client->webstore_id;
        $this->client_status = $client->client_status;
        $this->email = $client->email;
        $this->lastname = $client->lastname;
        $this->firstname = $client->firstname;
        $this->birthdate = $client->birthdate;
        $this->nameday = $client->nameday;
        $this->zipcode = $client->zipcode;
        $this->city = $client->city;
        $this->address = $client->address;
        $this->mobile = $client->mobile;
        $this->company = $client->company;
        $this->store_id = $client->store_id;
        $this->gender = $client->gender;
        $this->comment = $client->comment;
        $this->registdate = $client->registdate;
        $this->activedate = $client->activedate;
        $this->newsletter = $client->newsletter;
    }

}
