<?php
require_once('Car.php');
require_once('UberX.php');
require_once('Account.php');
require_once('UberPool.php');


//objeto car
$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar(); 

//Objeto Uberx
$uberX = new UberX("CVB123", new Account("Andres Ferreira", "555888"), "Chevrolet", " Spark");
$uberX->printDataCar();

$uberPool = new uberPool("CUY953", new Account("Andrea Ferreira", "557188"), "Dodge", " Atitude");
$uberPool->printDataCar();


?>