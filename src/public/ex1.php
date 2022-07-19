<?php

declare(strict_types=1);

class Beverage {
    // Properties
    public $color;
    public $price;
    public $temperature;
  
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

  $cola = new Beverage("black", "2€","8C°");

  echo $cola->getInfo();
  echo $cola->get_temperature();

/* EXERCISE 1
TODO: Create a class Beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
USE TYPEHINTING EVERYWHERE!
*/

?>
