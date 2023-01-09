<?php

class DataCalculator
{
    public function countYears($a, $b)
    {
        return $a - $b;
    }
}


class Human 
{
    public $birthYear;
    private $calculator;

    public function __construct()
    {
        $this->calculator = new DataCalculator();
    }

    public function getAge()
    {
        return $this -> calculator->countYears(date('Y'), $this -> birthYear);
    }

    public function getAgeOnFirstChild()
    {
        $year = 2001;
        return $this -> calculator->countYears(date('Y'), $year);
    }

    public function getAgeOnEventA1()
    {
        $eventWasAt = 2011;
        return $this -> calculator->countYears(date('Y'), $eventWasAt);
    }

    public function getAgeOnEventA2()
    {
        $eventWasAt = 1911;
        return $this -> calculator->countYears(date('Y'), $eventWasAt);
    }
}


// $calculator = new DataCalculator();
// $me = new Human();
// $me -> birthYear = 1997;

// echo $calculator->substract(date('Y'), $me->birthYear);