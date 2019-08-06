<?php

require_once 'Car.php';

$car = new Car();

$car
    ->setColor('grise')
    ->setBrand('Citroen')
    ->setModel('Saxo')
;

var_dump($car);
echo '<br>';
echo $car->drive();
echo '<br>';
echo $car->klaxon();
echo '<br>';


$car2 = new Car('bleue','Alfa Romeo', '147');
var_dump($car2);
echo $car2->klaxon();