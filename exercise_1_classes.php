<?php

declare(strict_types=1);

class Beverage{
    public string $color;
    public float $price;
    public string $temperature;

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
echo $newBeverage -> temperature . "</br>";

/* EXERCISE 1
DONE: Create a class beverage.
DONE: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
DONE: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
DONE: Make a getInfo function which returns "This beverage is <temperature> and <color>."
DONE: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
DONE: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/