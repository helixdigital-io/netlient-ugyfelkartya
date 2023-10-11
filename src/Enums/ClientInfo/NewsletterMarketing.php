<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums\ClientInfo;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class NewsletterMarketing implements IsValidEnumValueInterface
{
    public const SUBSCRIBED = 1;

    public const UNSUBSCRIBED = 0;

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

        throw new Exception('Invalid NewsletterMarketing value: ' . $value);
    }
}
