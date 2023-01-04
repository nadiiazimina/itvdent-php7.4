<?php

class Animal
{
    public $name;
    public $age = 0;

    public function say()
    {
        return "";
    }
}

class Cat extends Animal
{
    public $age = 1;
    public $tail;
    public $mustache;

    public function say()
    {
        return "MEOW";
    }
}

$animal = new Animal();
$cat = new Cat();
var_dump($cat->say());
echo "<pre>";
var_dump($animal, $cat);
