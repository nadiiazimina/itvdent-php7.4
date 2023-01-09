<?php

$result = [
    1 => [
        "id" => 1,
        "name" => "Nadiia",
        "surname" => "Zimina",
        "age" => 25
    ],
    2 => [
        "id" => 2,
        "name" => "Vera",
        "surname" => "Zimina",
        "age" => 45
    ],
    3 => [
        "id" => 3,
        "name" => "Andrey",
        "surname" => "Pichkurov",
        "age" => 11
    ],
    4 => [
        "id" => 4,
        "name" => "Sergii",
        "surname" => "Pichkurov",
        "age" => 52
    ],
];

class User
{
    private $id;
    private $name;
    private $surname;
    private $age;

    public function __set($name, $value)
    {

        if(property_exists($this, $name))
        {
            $methodName = 'set' .ucfirst($name);
            $this-> $name = $value;
        } else 
        {
            die("Свойства" .$name. "не существует");
        }
        
    }

    public function setId($id)
    {
        $this -> id = $id;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurename($surname)
    {
        $this->surname = $surname;
    }
}



$users = [];
foreach ($result as $key => $userData)
{
    $user = new User();
    foreach ($userData as $userColumn => $colValue)
    {
        $user->$userColumn = $colValue;
    }
    $users[] = $user;
}

echo "<pre>";
var_dump($users);