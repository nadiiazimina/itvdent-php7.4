<?php

//Интрефейс - это абстрактный класс в котором все методы которого абстрактные. Приставка abstract в методах уже не нужна. Интерфейс внутри себя может содержать только публичные методы и константы, никаких свойст!
//Если мы реализуем интерфейс в обычном классе, то мы обязаны реализовать все методы интерфейса
//Внутри абстрактного класса это делать не обязательно 

interface CalculatorInterface
{
    public function add($a, $b, $c);
    // public function substract($a, $b);
    // public function divide($a, $b);
    // public function multiply($a, $b);
}

class A implements CalculatorInterface 
{
    public function add ($a, $b, $c)
    {

    }
}

abstract class B implements CalculatorInterface
{

}

class B1 extends B
{
    public function add ($a, $b, $c)
    {

    }
}

// interface DefaultColumnInterface
// {
//     public function render($data);
//     public function render1($data);
//     public function render2($data);
//     public function render3($data);
//     public function render4($data);
//     public static function render111();
// }

// class Column implements DefaultColumnInterface
// {
//     public function render($data)
//     {

//     }

//     public function render1($data)
//     {
        
//     }

//     public function render2($data)
//     {
        
//     }

//     public function render3($data)
//     {
        
//     }

//     public function render4($data)
//     {
        
//     }

//     public static function render111()
//     {

//     }
// }

