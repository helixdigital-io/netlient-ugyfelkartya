<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums\ClientInfo;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class Newsletter implements IsValidEnumValueInterface
{
    public const SUBSCRIBED = 1;

    public const UNSUBSCRIBED = 2;

    /**
     * @throws Exception
     */
    public static function validate($value): bool
    {
        if (
            in_array($value, [
                self::SUBSCRIBED,
                self::UNSUBSCRIBED,
            ], true)
        ) {
            return true;
        }

        throw new Exception('Invalid Newsletter value: ' . $value);
    }
}
