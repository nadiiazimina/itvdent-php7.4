<?php

//Публичный интерфейс класса - 

interface CalculatorInterface
{
    public function add ($a, $b);
    public function add1 ($a, $b);
    public function add2 ($a, $b);
    public function add3 ($a, $b);
}

class A implements CalculatorInterface
{

}

//client code
$q = new A();
$q -> add1; //можем использовать все методы CalculatorInterface;