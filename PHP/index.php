<?php

require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");
require_once("UberVan.php");

/* $car = new Car ("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar(); */

$UberX = new UberX ("CVB123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
$UberX->setPassenger(4);
$UberX->printDataCar();

/* $UberPool = new UberPool ("ASD123", new Account("Andrea Fernandez", "AND456"), "Dodge", "Attitude");
$UberPool->printDataCar(); */

$UberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$UberVan->setPassenger(6);
$UberVan->printDataCar();