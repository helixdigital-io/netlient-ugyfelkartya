<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card;

class CardSubProperties
{
    public CardSubPropertyAttributes $total;

    public CardSubPropertyAttributes $lastdate;

    public CardSubPropertyAttributes $today;

    public CardSubPropertyAttributes $thisweek;

    public CardSubPropertyAttributes $lastmonth;

    public CardSubPropertyAttributes $thisyear;

    public CardSubPropertyAttributes $lastweek;

    public CardSubPropertyAttributes $yesterday;

    public function __construct(object $properties)
    {
        $this->total = new CardSubPropertyAttributes($properties->total);
        $this->lastdate = new CardSubPropertyAttributes($properties->lastdate);
        $this->today = new CardSubPropertyAttributes($properties->today);
        $this->thisweek = new CardSubPropertyAttributes($properties->thisweek);
        $this->lastmonth = new CardSubPropertyAttributes($properties->lastmonth);
        $this->thisyear = new CardSubPropertyAttributes($properties->thisyear);
        $this->lastweek = new CardSubPropertyAttributes($properties->lastweek);
        $this->yesterday = new CardSubPropertyAttributes($properties->yesterday);
    }
}
