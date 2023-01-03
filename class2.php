<?php

Class LastUserLoginNamelse 
{
    public static $name;
}

class UserFactory
{
    public function create()
    {
        $user = new User();
        $user->name = rand(1, 1e9);
        return $user;
    }
}

class User
{
    public $name;
}