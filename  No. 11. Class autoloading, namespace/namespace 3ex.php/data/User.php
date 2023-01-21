<?php

namespace data;

use exception\TestEx;

class User
{
    public static function asd()
    {
        try
        {
            throw new TestEx("asdasd");
        } catch (\Throwable $e)
        {

        }
    }
}