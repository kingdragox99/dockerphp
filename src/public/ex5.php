<?php

declare(strict_types=1);

class Beverage {
    // Properties
    private $color;
    private $price;
    private $temperature;
  
    // Methods
    public function __construct($color,$price,$temperature) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
      }

   /* public function __destruct() {
        echo "This beverage is {$this->color} and it's price is {$this->price} for a temperature of {$this->temperature}.";
      }*/
    
    public function getInfo() {
        return "This beverage is {$this->temperature} and {$this->color}.<br>";
      }

    public function get_temperature() {
        return $this->temperature;
      }
  }

  $cola = new Beverage("black", "3.5€","8C°");

  echo $cola->getInfo();
  echo $cola->get_temperature();

/* EXERCISE 5
Copy the class of exercise 1. V
TODO: Change the properties to private.
TODO: Fix the errors by using getter and setter functions.
TODO: Change the price of the cola to 3.5 euro (this is the inflation) and print it also on the screen on a new line.
*/