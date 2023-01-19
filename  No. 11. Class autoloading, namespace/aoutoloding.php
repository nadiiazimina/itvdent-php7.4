<?php

//один класс должен быть в одном файле

//автозагрузка классов - это механизм который позволяет нам загружать классы без множественого использования спецальных конструкций (типа required_once)
//с помощью  spl_autoload_register
//полное имя класса
//User::class конструкция позволяет узнать полное имя класса



// spl_autoload_register(function(string $classname)
// {
//     if($classname == User::class)
//     {
//         require_once "data/".$classname.".php";
//     } else
//     {
//         require_once $classname.".php";
//     }
//     // die($classname);
// });


function asd(string $classname)
{
    echo "asd";
    echo"<hr>";

    if($classname == User::class)
    {
        require_once "data/".$classname.".php";
    } else
    {
        require_once $classname.".php";
    }
};

function asd2(string $classname)
{
    echo "asd2";
    echo"<hr>";
    if($classname == User2::class)
    {
        require_once "data/".$classname.".php";
    } else
    {
        require_once $classname.".php";
    }
};

spl_autoload_register("asd");
spl_autoload_register("asd2");

$user = new User();
echo $user -> getUserName();

$user = new User2();
echo $user -> getUserName();

