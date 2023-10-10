<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects;

use Carbon\CarbonImmutable;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card\FromPointToMoney;
use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card\PointCollect;

class Card
{
    public string $status;

    public int $client_id;

    public array $coupons;

    public array $coupons_soon;

    public int $money;

    public int $points;

    public PointCollect $point_collect;

    public FromPointToMoney $from_point_to_money;

    public CarbonImmutable $registered;

    public float $purchases_total;

    public int $purchase_count;

    public ?CarbonImmutable $last_purchase;

    public int $store_id;

    public string $store_name;

    public string $first_name;

    public string $last_name;

    public int $card_type_id;

    public string $card_type_name;

    public bool $is_active;

    public bool $canredeem_point;

    public float $maximum_pointredemption_bypercent;

    public int $minimum_for_pointredemption;

    public int $maximum_pointredemption;

    public int $maximum_discount_applicable;

    public int $discount;

    public function __construct(object $response)
    {
        $this->status = $response->status;
        $this->client_id = $response->client_id;
        $this->coupons = $response->coupons;
        $this->coupons_soon = $response->coupons_soon;
        $this->money = $response->money;
        $this->points = $response->points;
        $this->point_collect = new PointCollect($response->point_collect);
        $this->from_point_to_money = new FromPointToMoney($response->from_point_to_money);
        $this->registered = CarbonImmutable::parse($response->registered);
        $this->purchases_total = $response->purchases_total;
        $this->purchase_count = $response->purchase_count;
        $this->last_purchase = !empty($response->last_purchase) ? CarbonImmutable::parse($response->last_purchase) : null;
        $this->store_id = $response->store_id;
        $this->store_name = $response->store_name;
        $this->first_name = $response->first_name;
        $this->last_name = $response->last_name;
        $this->card_type_id = $response->card_type_id;
        $this->card_type_name = $response->card_type_name;
        $this->is_active = $response->is_active;
        $this->canredeem_point = $response->canredeem_point;
        $this->maximum_pointredemption_bypercent = $response->maximum_pointredemption_bypercent;
        $this->minimum_for_pointredemption = $response->minimum_for_pointredemption;
        $this->maximum_pointredemption = $response->maximum_pointredemption;
        $this->maximum_discount_applicable = $response->maximum_discount_applicable;
        $this->discount = $response->discount;
    }
}
