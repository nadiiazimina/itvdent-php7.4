<?php

//void - конструкция которая является возващаемым типом (возвращаю НИЧЕГО)

class X{}
interface QQQ{}

class Human
{
    public function makeGreeting(?string $data):void
    {

    }

    public function makeGreeting2(string $data = null):void
    {

    }
}

$me = new Human();
$me->makeGreeting("null");
$me->makeGreeting2("null");