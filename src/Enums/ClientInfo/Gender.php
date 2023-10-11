<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums\ClientInfo;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class Gender implements IsValidEnumValueInterface
{
    public const UNKNOWN = 0;

    public const MALE = 1;

    public const FEMALE = 2;

    /**
     * @throws Exception
     */
    public static function validate($value): bool
    {
        if (
            in_array($value, [
                self::UNKNOWN,
                self::MALE,
                self::FEMALE,
            ], true)
        ) {
            return true;
        }

        throw new Exception('Invalid Gender value: ' . $value);
    }
}
