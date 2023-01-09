<?php

//__get сробатывает когда мы пыьаемся получить доступ к несуществующему свойтву 
//__set пытаемся записать какой-то значение в нечуществующее свойство 

class A 
{

    private $username;

    public function setUserName($name)
    {
        $this->username = $name;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function __get($name)
    {
        if($name == "username")
        {
            return $this->getUserName();
        }
        die("Не могу вернуть свойство" .$name);
        // return $this->$name;
    }

    public function __set($name, $value)
    {
        if($name == "username")
        {
            $this->setUserName($value);
            return null;
        }
        die("Не могу присвоить свойство " .$name);
        // $this->$name = $value;
    }
}

$a = new A();
$a -> x = 123;
echo $a -> x;