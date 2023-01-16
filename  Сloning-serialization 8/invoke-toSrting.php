<?php

class CurrentColor 
{
    const BLACK = "#000";
    const WHITE = "#fff";
    const DEFAULT = "#000"; 

    protected $color;

    public function __constructor()
    {
        $this->color = self::DEFAULT;
    }

    public function setBlack()
    {
        $this->color = self::BLACK;
    }

    public function setWhite()
    {
        $this->color = self::WHITE;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __toString()
    {
        return "asdasd";
    }

    public function __invoke()
    {
        return "asdasd";
    }
}

    $c = new CurrentColor();
    echo "Текущий цвет = ". $c; 
    echo "<hr>";
    echo "Текущий цвет = ". $c(); 