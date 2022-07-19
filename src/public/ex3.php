<?php

declare(strict_types=1);

class Beverage {
    // Properties
    private $color = "";
    private $price = 0;
    private $temperature = "cold";
  
    // Methods
    public function __construct($color,$price,$temperature) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
      }
    
    public function getInfo() {
        return "This beverage is {$this->temperature} and {$this->color}.<br>";
      }

    public function get_temperature() {
        return $this->temperature;
      }
    }

class Beer extends Beverage {

        private $name = "";
        private $alcoholPercentage = 0;

        public function __construct($color,$price,$temperature,$name,$alcoholPercentage) {
            $this->color = $color;
            $this->price = $price;
            $this->temperature = "cold";
            $this->name = $name;
            $this->alcoholPercentage = $alcoholPercentage;
          }

        public function getAlcoholPercentage() {
            return "<br>This beverage is {$this->alcoholPercentage}% alcool. <br>";
          }

        public function get_AlcoholPercentage() {
            return $this->alcoholPercentage;
          }

        public function beerInfo() {
            return "<br>Hi i'm {$this->name} and have an alcochol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
          }
  }

  $Duvel = new Beer("light","3.5€","8C°","Duvel","8.5");

  echo $Duvel->getAlcoholPercentage();
  echo $Duvel->get_AlcoholPercentage();
  echo $Duvel->beerInfo();

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola. V
TODO: Make all properties private. V
TODO: Make all the other prints work without error. V
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/