<?php

namespace Http\Requests;

use Illuminate\Http\Request;

class BaseRequest extends Request
{
    public function expectsJson(): bool
    {
        return true;
    }

    public function wantsJson(): bool
    {
        return true;
    }

    public function asStdClass()
    {
        return json_decode($this->getContent(), false);
    }
}
