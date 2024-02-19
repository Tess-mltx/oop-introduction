<?php

declare(strict_types=1);
require('exercise_1_classes.php');
unset($newBeverage);


class Beer extends Beverage {
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $temperature, $name, $alcoholPercentage){
        parent::__construct($color, $price, $temperature);
        $this -> name = $name;
        $this -> alcoholPercentage = $alcoholPercentage;
    }

    public function getProperties(string $property) {
        // Corrected the syntax and added the property check
        if (property_exists($this, $property)) {
            echo $this->$property;
        } else {
            echo "Property does not exist.";
        }
    }
    
    public function getAlcoholPercentage(){
        echo "This beer contain $this->alcoholPercentage % of alcohol </br>";
    }

    private function beerInfos(){
        return("Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color.");
    }

    public function getBeerInfos(){
        echo $this->beerInfos() . "</br>";
    }
}

$newBeer = new Beer("blond", 3.5, "cold", "Duvel", 8.5);

$newBeer -> getAlcoholPercentage();
// echo $newBeer->alcoholPercentage . "</br>";
echo $newBeer->color . "</br>";
$newBeer -> getInfo();

$beverage = new Beer("black", 1.5, "hot", "cofee", 0);
$beverage->getAlcoholPercentage() . "<:br>";

echo $newBeer -> color = "light"; 
$newBeer->getBeerInfos();


/* EXERCISE 3

DONE: Copy the code of exercise 2 to here and delete everything related to cola.
DONE: Make all properties private.
DONE: Make all the other prints work without error.
DONE: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
DONE: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

DONE: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/