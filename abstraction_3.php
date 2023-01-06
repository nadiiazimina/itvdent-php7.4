<?php

class Weapon
{
    public function attack()
    {
        return rand(1, 2000);
    }
}

class Sword extends Weapon
{

}

class Warrior 
{
    public function attack($weapon)
    {
        if($weapon instanceof Weapon)
        {
            return $weapon-> attack();
        }
    }
}