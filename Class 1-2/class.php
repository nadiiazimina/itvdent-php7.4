<?php

class Human {
    // характеристика обьекта - свойство 
    public $name;
    public $surename;
    public $age;

    public function sayHello() //метод используется внутри класса 
    {
        return "Hello";
    }
}

// $human1 = new Human(); //новые обьект в классе
// $human1->name = "Nadiia"; //добовляем свойства для обьекта 
// $human1->surename = "Zimina";
// $human1->age; //null

$a = new Human();
echo $a->sayHello();


class SheepCounter {

    public function count() 
    {
        
    }

}
