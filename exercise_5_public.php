<?php

declare(strict_types=1);

class Beverage{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct($color, $price, $temperatue = "cold"){
        $this -> color = $color;
        $this -> price = $price;
        $this -> temperature = $temperatue;
    }

    public function getInfo(){
        echo "This beverage is $this->temperature and $this->color. </br>";
    }

}

$newBeverage = new Beverage("black", 2, "cold");
$newBeverage -> getInfo();




/* EXERCISE 5

Copy the class of exercise 1.

DONE: Change the properties to private.
DO?: Fix the errors without using getter and setter functions.
IMPOSSIBLE CAUSE PRECEDENT CONSSIGNE: Change the price to 3.5 euro and print it also on the screen on a new line.
*/