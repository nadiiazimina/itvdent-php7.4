<?php

declare(strict_types=1); //команда переводит php в строгий режим 

class X{}
interface QQQ{}

class Human
{
    public function makeGreeting(string $data): string
    {
        return "Hello ". $data;
        // return 123;
        // return new class{
        //     public function __toString()
        //         {
        //             return "Ola";
        //         }
        // };
    }
}

$me = new Human();
echo $me->makeGreeting("Nadiia");