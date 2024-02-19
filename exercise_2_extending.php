<?php
declare(strict_types=1);
require('exercise_1_classes.php');

class Beer extends Beverage {
    public string $name;
    public float $alcoholPercentage;

    public function __construct($color, $price, $temperature, $name, $alcoholPercentage){
        parent::__construct($color, $price, $temperature);


        $this -> name = $name;
        $this -> alcoholPercentage = $alcoholPercentage;
    }
    
    public function getAlcoholPercentage(){
        echo "This beer contain $this->alcoholPercentage % of alcohol </br>";
    }
}

$newBeer = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

$newBeer -> getAlcoholPercentage();
echo $newBeer->alcoholPercentage . "</br>";
echo $newBeer->color . "</br>";
$newBeer -> getInfo();

$beverage = new Beverage("blond", 3.5, "cold");
echo $beverage->getAlcoholPercentage() . "<:br>";

/* EXERCISE 2

DONE: Make class beer that extends from Beverage.
DONE: Create the properties name (string) and alcoholPercentage (float).
DONE: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
DONE: Make a getAlcoholPercentage function which returns the alocoholPercentage.
DONE: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
DONE: Also the name equal to Duvel and the alcohol percentage to 8,5%
DONE: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
DONE: Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/