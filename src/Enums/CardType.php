<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class CardType implements IsValidEnumValueInterface
{
    public const VIRTUAL_CARD = 2;

    public const REGULAR_CUSTOMER = 1;

    public const REGULAR_CUSTOMER_2 = 3;

    public const REGULAR_CUSTOMER_3 = 4;

    /**
     * @throws Exception
     */
    public static function validate($value): bool
    {
        if (
            in_array($value, [
                self::VIRTUAL_CARD,
                self::REGULAR_CUSTOMER,
                self::REGULAR_CUSTOMER_2,
                self::REGULAR_CUSTOMER_3,
            ], true)
        ) {
            return true;
        }

        throw new Exception('Invalid CardType value: ' . $value);
    }
}
