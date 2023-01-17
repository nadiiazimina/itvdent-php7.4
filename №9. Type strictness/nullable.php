<?php

class X{}
interface QQQ{}

class Human
{
    public function makeGreeting(?string $data):?string //если мы хотиим вернуть какой-то тип данных и null нужно  поставить знак вопроса перед типом данных
    {
        return null;
    }

    public function makeGreeting2(string $data = null): ?string //разница в том что в этом случае null это дефолтное значение 
    {
        return null;
    }
}

$me = new Human();
$me->makeGreeting("null");
$me->makeGreeting2("null");

