<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums\ClientInfo;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class ClientStatus implements IsValidEnumValueInterface
{
    public const ACTIVE = 1;

    public const DELETED = 0;

    public const FROZEN = -1;

    /**
     * @throws Exception
     */
    public static function validate($value): bool
    {
        if (
            in_array($value, [
                self::ACTIVE,
                self::DELETED,
                self::FROZEN,
            ], true)
        ) {
            return true;
        }

        throw new Exception('Invalid ClientStatus value: ' . $value);
    }
}
