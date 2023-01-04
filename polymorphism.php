<?php

class Calculator 
{
    public function add($a, $b)
    {
        return $a+$b;
    }
}

class MyCalulatore extends Calculator
{

    public function add($a, $b)
    {
       $result = parent::add($a, $b);
       echo "MyCalulatore|add {$a}, {$b} => {$result}";
       return $result;
    }
}



