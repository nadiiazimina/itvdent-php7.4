<?php

class User 
{
    protected $name;

    private function getData()
    {
        return [1,2,3,4,5];
    }

    public function __call($name, $arguments)
    {
        if(method_exists($this, $name))
        {
            return call_user_func([$this, $name], $arguments);
        }
        else 
        {
            die("__call: нет метода " .$name);
        }
        var_dump($name, $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
    }
}

$user1 = new User();
var_dump( $user1 -> getData(2));
// $user1::getData(5);