<?php

class User implements Serializable
{
    public $login;
    public $password;
    public $nickname;
    public $age;

    public function __construct(
        $login, $pass, $nick, $age
    ){
        $this -> login = $login;
        $this -> password = $pass;
        $this -> nickname = $nick;
        $this -> age = $age;
    }

    public function __clone()  //скрывает часть инфорации перед клонированием 
    {
        $this -> password = null;
        $this -> login = null;
    }

    // public function __sleep()  //возвращает массив с именами всех свойств этого обьекта, которые должны быть сериалезированы 
    // {
    //     die("__sleep");s

    //     return [
    //         "nickname",
    //         "age"
    //     ];
    // }

    // public function __wakeup() 
    // {
    //     // die(var_dump($this));
    //     $this->password = 1234;
    // }

    public function serialize()
    {
        return serialize([
            "asdasd" => $this->age,
        ]);
    }

    public function unserialize($serialized)
    {

    }
}

$user1 = new User("nadia", "12345", "zima", "43");

// $user1String = serialize($user1); //записывает обьект ввиде строки 
// $user1Obj = unserialize($user1String); //по строке востонавливает обьект 

echo "<pre>";
// var_dump([
//     $user1,
//     $user1String,
//     $user1Obj
// ]);