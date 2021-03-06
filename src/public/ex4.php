<?php

declare(strict_types=1);

class Beverage {
    // Properties
    protected $color = "";
    protected $price = 0;
    protected $temperature = "cold";
  
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

        protected $name = "";
        protected $alcoholPercentage = 0;

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


/* EXERCISE 4
Copy the code of exercise 3 to here and delete everything related to cola. V
TODO: Make all properties protected. V
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.
USE TYPEHINTING EVERYWHERE!
*/