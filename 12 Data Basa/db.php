<?php

//система для управления бд:
//1. Реляционнаые - со связями (id->login->password)
//2. Не реляционнаые - не имеют явных связей 

//Класс PDO - соеденение и работа с бд
$connection = new PDO(
    "mysql:host=localhost;dbname=lesson12", "root", ""
);

$users = $connection->query("SELECT * FROM user")->fetchAll();

echo "<pre>";
var_dump($users);