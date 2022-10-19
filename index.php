<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';


// Bike
$bicycle = new Bicycle('blue', 1);

// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed(). ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br><br>';



// Car
$car = new Car('green', 4, 'electric');

//Moving car
echo $car->forward();
echo '<br> Car speed : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
echo $car->brake();
echo '<br> Car speed : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake() . '<br><br>';

// Truck
$truck = new Truck('red', 3, 'fuel', 10);

echo $truck->isFull() . '<br>';
echo $truck->forward();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed(). ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Truck speed : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br><br>';

