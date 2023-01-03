<?php

class Human {

    public $name;
    public $surname;
    public $birthYear;

    public function getFullName() 
    {
        return "{$this->name} {$this->surname} ({$this->getAge()})";
    }

    public function getAge()
    {
        return date('Y') - $this->birthYear;
    }

};

$human = new Human();
$human->name = 'Nadiia';
$human->surname = 'Pichkurova';
$human->birthYear = 1997;

echo $human->getFullName();