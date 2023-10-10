<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card;

class PointCollect
{
    public int $money;

    public int $point;

    public function __construct(object $pointCollect)
    {
        $this->money = $pointCollect->money;
        $this->point = $pointCollect->point;
    }
}
