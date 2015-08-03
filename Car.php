<?php
class Car
{
    private $make;
    public $price;
    public $miles;

    function __construct($make, $price, $miles = 10)
    {
          $this->make = $make;
          $this->price = $price;
          $this->miles = $miles;
    }
    function setMake($new_make)
    {
          $this->make = $new_make;
    }
    function getMake()
    {
          return $this->make;
    }

}

$porsche = new Car("2014 Porsche 911", "114991");
$camaro = new Car("67' Camaro", "70000");

 $cars = array($porsche, $camaro);

 $cars_matching_search = array();
 foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
 }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title> Your Car Dealership's Homepage</title>
 </head>
 <body>
   <h1>Your Car Dealership</h1>
   <ul>
     <?php
          foreach ($cars_matching_search as $car) {
            $make = $car->getMake();
            echo "<li> $make </li>";
            echo "<ul>";
                echo "<li> $$car->price </li>";
                echo "<li> Miles: $car->miles </li>";
            echo "</ul>";
          }
        ?>
      </ul>
    </body>
</html>
