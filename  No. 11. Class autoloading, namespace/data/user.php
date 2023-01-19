<?php

class User
{
    public function getUserName()
    {
        return "user".rand(1, 1e6);
    }
}