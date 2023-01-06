<?php

use Human as GlobalHuman;

class Human 
{
    public $name;
    public $surname;
    protected $fatherName = "mahmut";
    private $cardNumber = 12345678;
    public $birthYear;

    public function getCardNumbr()
    {
        return $this-> cardNumber;
    }

    public function getFatherName()
    {
        return $this->fatherName;
    }

    public function getAge()
    {
        return date("Y") - $this->birthYear;
    }
}

$me = new Human();
echo $me-> getFatherName();
echo $me-> getCardNumbr();