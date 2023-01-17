<?php

//ковариантность позволяет дочернему методу возвращать более конкретный тип,чем тип возврата его родительского метода. (В наследнике мы как бы уточняем информацию)

//контравариантность - это механизм языка котрый позволяет в наследоваемом классе сужать тип данных для typeHint

class Food{}

class AnimalFood extends Food{}

class AnimalFood2 extends AnimalFood{}

class Animal
{
    public function eat(AnimalFood $food)
    {

    }
}

$af2 = new AnimalFood2();
$af1 = new AnimalFood();
// $food = new Food();

$an = new Animal();
$an->eat($af2);
$an->eat($af1);

// $an->eat($food); //ошибка - не может быть родитель

class Dog extends Animal
{
    public function eat(Food $food)
    {

    }
}
$food = new Food();
$dog = new Dog();
$dog->eat($food);


