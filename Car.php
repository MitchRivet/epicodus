<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
}

$porsche = new Car();
$porsche->make_model = "2014 Porsche 911";
$porsche->price = "114991";
$porsche->miles = "2049385723094857"; 


 $camaro = new Car();
 $camaro->make_model = "67' Camaro";
 $camaro->price = "70000";
 $camaro->miles = "2";

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
            echo "<li> $car->make_model </li>";
            echo "<ul>";
                echo "<li> $$car->price </li>";
                echo "<li> Miles: $car->miles </li>";
            echo "</ul>";
          }
        ?>
      </ul>
    </body>
</html>
