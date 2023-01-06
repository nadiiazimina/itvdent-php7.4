<?php

use Human as GlobalHuman;

class Humans
{
    protected $name;
    protected $birthYear;

    public function setName($name)
    {
        if(
            is_string($name)
            && mb_strlen($name) > 0
        ){
            $this->name = $name;
        } else {
            die("error");
        }
    }

    public function setBirthYear($birthYear)
    {
        if(
            is_int($birthYear)
            && $birthYear > date("Y") - 150
        ){
            $this->birthYear = $birthYear;
        } else {
            die("error");
        }
        
    }

    public function getName()
    {
        return $this -> name;
    }

    public function getBirthYear()
    {
        return $this -> birthYear;
    }

    public function __construct($name, $birthYear)
    {
        $this -> setName($name);
        $this -> getBirthYear($birthYear);
    }
}

$me = new Humans("Nadiia", 1997);
$me -> setName(123);

echo $me -> getName();
