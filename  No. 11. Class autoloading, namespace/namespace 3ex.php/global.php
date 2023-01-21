<?php

use app\Application;

spl_autoload_register(function($className){
    echo $className."<hr>";
    require_once str_replace("\\", "/", $className)."php";
});

$app = new Application();
$app->run();
