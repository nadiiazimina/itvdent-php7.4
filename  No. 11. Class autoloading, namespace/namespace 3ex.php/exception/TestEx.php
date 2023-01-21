<?php

namespace exception;

use helpers\ArrayHelper;

class TestEx extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        ArrayHelper::asd();
        parent::__construct($message, $code, $previous);
    }
}