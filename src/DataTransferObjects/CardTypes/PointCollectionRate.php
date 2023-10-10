<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes;

class PointCollectionRate
{
    public int $money;

    public int $point;

    public function __construct(object $pointCollectionRate)
    {
        $this->money = $pointCollectionRate->money;
        $this->point = $pointCollectionRate->point;
    }
}
