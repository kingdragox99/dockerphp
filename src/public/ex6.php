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

        const BARNAME = 'The Trooper';

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
  }

  $cola = new Beverage("black", "2€","8C°");
  $Duvel = new Beer("blond","3.5€","8C°","Duvel","8.5");

  echo $cola->getInfo();
  echo $cola->get_temperature();
  echo $Duvel->getAlcoholPercentage();
  echo $Duvel->get_AlcoholPercentage();

/* EXERCISE 6
Copy the classes of exercise 2. V
TODO: Change the properties to private. V
TODO: Make a const BARNAME with the value 'The Trooper'. V
TODO: Print the constant on the screen.
TODO: Create a function in Beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.
Use typehinting everywhere!
*/