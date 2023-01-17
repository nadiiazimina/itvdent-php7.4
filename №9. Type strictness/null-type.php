<?php

class Human
{
    private $name;

    public function setName(string $name = null) //но вход может быть или строка или null
    {
        $this->name = $name;
    }
}

$me = new Human;
$me ->setName(null);