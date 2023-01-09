<?php

//Существует три вида классов
//1. Просто классы
//2. Абстрактные классы - класс от которого нельзя создать экзмепляр обьекта, его можно только относледовать. Aбстрактный класс может быть без абстрактного метода. Aбстрактный класс не содержит в себе реализацию.
//3. Финальные классы

abstract class Animal
{
    abstract public function say();
}

class Hourse extends Animal
{
    public function say()
    {
        return "Igo-go";
    }
}

$hours1 = new Hourse();
echo $hours1->say();

// class Dog extends Animal
// {}

// class Fish extends Animal
// {}