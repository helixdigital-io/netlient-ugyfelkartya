<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card;

class FromPointToMoney
{
    public int $money;

    public int $point;

    public function __construct(object $fromPointToMoney)
    {
        $this->money = $fromPointToMoney->money;
        $this->point = $fromPointToMoney->point;
    }
}
