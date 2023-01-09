<?php



class Color 
{
    public static $name;
    public static function stat() {}

    const BLACK = '#000';
    const WHITE = '#FFF';
    const GOLD = '#FFD700';
}

class Auto {
    const BMW = 'BMW';
    const AUDI = 'AUDI';
    const FERRARI = 'FERRARI';
    const MERCEDEC = 'MERCEDEC';

    public $name;

    public function imagine()
    {
        switch($this->name)
        {
            case AUTO::AUDI:
                return Color::BLACK;
                break;
            case AUTO::BMW:
                return Color::WHITE;
                break;
            case AUTO::FERRARI:
                return Color::GOLD;
                break;
            case AUTO::MERCEDEC:
                return Color::BLACK;
                break;
            default:
                return Color::GOLD;
                break;
        }
    }
}

$a = new Auto();
$a->name = $a::AUDI;
// $a = new Color();
$a::$name;
echo Color::$name;

$a1 = new Auto();
$a1->name = Auto::BMW;

var_dump([
    $a->imagine(),
    $a1->imagine()
])


// class Color {
//     const BLACK = '#000';
//     const WHITE = '#FFF';
//     const GOLD = '#FFD700';

// }

// class Car {
//     public $name;
//     public $color;
// }

// $car1 = new Car();
// $car1->name = "Mercedec";

// $car2 = new Car();
// $car2->name = "BMW";
// $car2->color = Color::GOLD;

// var_dump($car2);








// const A = 'hello'; //global

// class X
// {
//     const A = 'Nadiia';
// }

// $a = new X();
// echo $a::A; 

?>