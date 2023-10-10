<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes;

class CardType
{
    public int $id;

    public string $name;

    public bool $is_default;

    public int $discount_percent;

    public bool $point_collect_enabled;

    public PointCollectionRate $point_collection_rate;

    public PointExchangeRate $point_exchange_rate;

    public LevelJump $leveljump;

    public function __construct(
        int $id,
        string $name,
        bool $is_default,
        int $discount_percent,
        bool $point_collect_enabled,
        object $point_collection_rate,
        object $point_exchange_rate,
        object $leveljump
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->is_default = $is_default;
        $this->discount_percent = $discount_percent;
        $this->point_collect_enabled = $point_collect_enabled;
        $this->point_collection_rate = new PointCollectionRate($point_collection_rate);
        $this->point_exchange_rate = new PointExchangeRate($point_exchange_rate);
        $this->leveljump = new LevelJump($leveljump);
    }
}
