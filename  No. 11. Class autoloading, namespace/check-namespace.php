<?php

use data\User3;
use d\User as UserD;

//глобальное пространсво задает интропритатор php

spl_autoload_register(function ($className)
{
    // die($className);
    $filePath = str_replace("\\", "/", $className);
    require_once $filePath.".php";
});

User3::asd();
echo "<hr>";
UserD::asd();