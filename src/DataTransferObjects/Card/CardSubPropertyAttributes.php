<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\Card;

class CardSubPropertyAttributes
{
    public object $options;

    public float $summary;

    public int $times;

    public string $start;

    public string $end;

    public function __construct(object $attributes)
    {
        $this->options = $attributes->options;
        $this->summary = $attributes->summary;
        $this->times = $attributes->times;
        $this->start = $attributes->start;
        $this->end = $attributes->end;
    }
}
