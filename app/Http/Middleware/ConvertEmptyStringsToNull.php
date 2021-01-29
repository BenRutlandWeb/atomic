<?php

namespace App\Http\Middleware;

use Atomic\Foundation\Http\Middleware\TransformsRequest;

class ConvertEmptyStringsToNull extends TransformsRequest
{
    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform(string $key, $value)
    {
        return is_string($value) && $value === '' ? null : $value;
    }
}
