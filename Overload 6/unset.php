<?php


class User {
    protected $name;

    public function __unset($name)
    {
        die("__unset " .$name);
    }
}

$user1 = new User();
// $user1->name = 'nadiia';

// var_dump($user1->name);
unset($user1->name);
// echo"<hr>";
// var_dump($user1->name);