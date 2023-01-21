<?php

namespace d;

// use data\User as UserData; the same as \data\User::asd; in function
use \Exception;

class User{
    public static function asd()
        {

            \data\User::asd;



            echo __CLASS__;
        }
    
}