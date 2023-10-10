<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Traits;

trait IsSuccessfulResponse
{
    private function isSuccessfulResponse(object $response): bool
    {
        return property_exists($response, 'status')
            && $response->status === 'success';
    }
}
