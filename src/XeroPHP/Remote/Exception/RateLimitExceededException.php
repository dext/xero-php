<?php

namespace XeroPHP\Remote\Exception;

use XeroPHP\Remote\Response;
use XeroPHP\Remote\Exception;

class RateLimitExceededException extends Exception
{
    protected $message;

    protected $code = Response::STATUS_RATE_LIMIT_EXCEEDED;

    protected $rateLimitProblem;

    public function setRateLimitProblem($rateLimitProblem)
    {
        $this->rateLimitProblem = strtolower($rateLimitProblem);
    }

    public function getRateLimitProblem()
    {
        return $this->rateLimitProblem;
    }
}
