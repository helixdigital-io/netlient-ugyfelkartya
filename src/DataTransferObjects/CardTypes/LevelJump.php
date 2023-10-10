<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\DataTransferObjects\CardTypes;

class LevelJump
{
    public int $jump_to_id;

    public int $jump_to_by_purchase;

    public int $jump_to_by_pointbalance;

    public function __construct(
        object $levelJump
    ) {
        $this->jump_to_id = $levelJump->jump_to_id;
        $this->jump_to_by_purchase = $levelJump->jump_to_by_purchase;
        $this->jump_to_by_pointbalance = $levelJump->jump_to_by_pointbalance;
    }
}
