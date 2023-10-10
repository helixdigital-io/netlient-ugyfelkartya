<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes;

class PointExchangeRate
{
    public int $money;

    public int $point;

    public function __construct(object $pointExchangeRate)
    {
        $this->money = $pointExchangeRate->money;
        $this->point = $pointExchangeRate->point;
    }
}
