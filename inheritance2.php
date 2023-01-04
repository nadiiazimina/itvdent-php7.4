<?php

use Human as GlobalHuman;

class Human
{
    const DEFAULT_MAX_AGE = 55;

    public function getMaxAge()
    {
        // return self::DEFAULT_MAX_AGE;
        return static::DEFAULT_MAX_AGE;
    }
}

class Human2 extends Human
{
    const DEFAULT_MAX_AGE = 90;
}

class Human3 extends Human2
{
    const DEFAULT_MAX_AGE = 70;
}

class Human4 extends Human3
{
    const DEFAULT_MAX_AGE = 65;
}

$h1 = new Human2();
$h2 = new Human4();

var_dump([
    $h1->getMaxAge(),
    $h2->getMaxAge()
]);

