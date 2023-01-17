<?php

// котроль типов - механизм который позволяет сделать код более жестким. Перед аргументом нужно поставить тип данных который мы ожидаем получить 

class Human 
{
    private $name;

    // public function setName(string $name)
    // {
    //     if (is_string($name)) {
    //         $this->name = $name;
    //     } else {
    //         die("Неыерное знаечение $name");
    //     }
    // } //old version

    public function setName(string $name)
    {
        $this->name = $name;

    }
}

$me = new Human();
// $me->setName("Nadiia");
// $me->setName(1234);
$me->setName(new class{
    public function __toString()
    {
        return "hello";
    }
});


