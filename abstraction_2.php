<?php

class DefaultCounter
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function substract($a, $b)
    {
        return $a - $b;
    }
}

class MoneyCalculator extends DefaultCounter
{}
class PriceCalculator extends DefaultCounter
{}


class Humans 
{
    public function calculate($calculator)
    {
        if($calculator instanceof DefaultCounter)
        {
            $moneyWas = 2000;
            $secondValue = 500;
            return $calculator-> substract($moneyWas, $secondValue);
        } else {
            die("error");
        }
    }
}