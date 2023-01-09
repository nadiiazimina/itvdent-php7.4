<?php

use Human as GlobalHuman;

class Human 
{
    public $name = "your name";
    public $surname = "your surname";
    public $age = "your age";

    protected $birthDate = "12.12.12";

    // private $cardNumber = "12345678";
}

class Human2 extends Human 
{
    public function getData()
    {
        return [
            $this->name,
            $this-> surname,
            $this-> age,
            $this-> birthDate,
            // $this-> cardNumber,
        ];
    }
}

$me = new Human();
$me2 = new Human2();

var_dump($me2->getData());