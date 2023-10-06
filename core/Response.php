<?php

namespace core;

class Response
{
    static public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}