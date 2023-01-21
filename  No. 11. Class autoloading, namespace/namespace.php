<?php

//глобальный контекст
//локальный контекст 
//полное имя класса составляется из названия неймспейса и названия класса
//в одном файле где есть namespace не может быть глобальной функции
//каждый класс мы создаем в отдельном файле, каждый файл лежить в определенной директории, в каждый файл мы вставляем конструкцию namespace

 namespace X 
 {
     //X\User
    class User{
        public static function asd()
        {
            echo 1;
        }
    }
 }

 namespace X2
 {
     //X2\User
     class User{
        public static function asd()
        {
            echo 2;
        }
     }
 }

 namespace X3
 {
     use X\User;
     use X2\User as X2User;

     User::asd();
     X2User::asd();
 }



