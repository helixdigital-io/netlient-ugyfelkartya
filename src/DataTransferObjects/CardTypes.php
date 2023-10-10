<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects;

use HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes\CardType;

class CardTypes
{
    public string $status;

    /** @var CardType[] */
    public array $cardtypes;

    public function __construct(object $response)
    {
        $this->status = $response->status;

        foreach ($response->cardtypes as $cardType) {
            $this->cardtypes[] = new CardType(
                $cardType->id,
                $cardType->name,
                $cardType->is_default,
                $cardType->discount_percent,
                $cardType->point_collect_enabled,
                $cardType->point_collection_rate,
                $cardType->point_exchange_rate,
                $cardType->leveljump
            );
        }
    }
}
