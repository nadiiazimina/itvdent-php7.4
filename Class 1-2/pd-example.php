<?php

class Cat {

    public $age;
    public $name;
}


$cat1 = new Cat();
$cat1 -> name = "Murzik";
$cat1 -> age = 2;
//значение передается всегда по ссылке!

$cat2 = new Cat();
$cat2 -> name = "Murzik";
$cat2 -> age = 2;

// var_dump([
//     "НЕ СТРОГО" => $cat1 == $cat2,
//     "СТРОГО" => $cat1 === $cat2
// ]);

echo "<pre>";
var_dump($cat1, $cat2);