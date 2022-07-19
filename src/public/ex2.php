<?php

declare(strict_types=1);

class Beverage {
    // Properties
    public $color = "";
    public $price = 0;
    public $temperature = "cold";
  
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

        public $name = "";
        public $alcoholPercentage = 0;

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

/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

?>