<?php

require 'Car.php';
require 'Bicycle.php';

$car = new Car('Choupette',4, 'gasoline');
var_dump($car);


echo $car->start() . '<br>';

echo $car->forward() . '<br>' ;

echo $car->brake() . '<br>';


