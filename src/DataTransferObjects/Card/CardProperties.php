<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card;

class CardProperties
{
    public CardSubProperties $purchase;

    public CardSubProperties $pointupload;

    public function __construct(object $properties)
    {
        $this->purchase = new CardSubProperties($properties->purchase);
        $this->pointupload = new CardSubProperties($properties->pointupload);
    }
}
