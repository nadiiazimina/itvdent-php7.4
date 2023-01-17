<?php

// можем передавать (Int, string, float, bool)
// array
//object
//class name/interface name
//self когда вызывается метод то подразумевается, что будет екземпляр класса который и вызывает этот метод
//colable - тип данных который ожидает, что мы веренм функцию callback
//itarable

class X{}
interface QQQ{}

class Human
{
    public function asd(QQQ $data)
    {

    }

    public function dsa(X $data)
    {

    }

    public function sda(self $data)
    {

    }

    public function das(callable $data)
    {

    }
}

$me = new Human();
$me->das(function()
{
    return 2;
});