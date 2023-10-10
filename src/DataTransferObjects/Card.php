<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card\CardProperties;

class Card
{
    public string $status;

    public CardProperties $properties;

    public array $coupons;

    public array $coupons_soon;

    public int $money;

    public int $points;

    public int $purchases_total;

    public int $store_id;

    public string $store_name;

    public string $first_name;

    public string $last_name;

    public int $card_type_id;

    public string $card_type_name;

    public int $discount;

    public function __construct(object $response)
    {
        $this->status = $response->status;
        $this->properties = new CardProperties($response->properties);
        $this->coupons = $response->coupons;
        $this->coupons_soon = $response->coupons_soon;
        $this->money = $response->money;
        $this->points = $response->points;
        $this->purchases_total = $response->purchases_total;
        $this->store_id = $response->store_id;
        $this->store_name = $response->store_name;
        $this->first_name = $response->first_name;
        $this->last_name = $response->last_name;
        $this->card_type_id = $response->card_type_id;
        $this->card_type_name = $response->card_type_name;
        $this->discount = $response->discount;
    }
}
