<?php

namespace XeroPHP\Remote\Exception;

use XeroPHP\Remote\Exception;
use XeroPHP\Remote\Response;

class RateLimitExceededException extends Exception
{
    protected $message;

    protected $code = Response::STATUS_RATE_LIMIT_EXCEEDED;

    public function __construct($limit_type)
    {
        if ($limit_type === 'minute') {
            $this->message = 'The per minute API rate limit for your organisation/application pairing has been exceeded.';
        } else {
            $this->message = 'The daily API rate limit for your organisation/application pairing has been exceeded.';
        }
    }
}
