<?php

require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");

/* $car = new Car ("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar(); */

$UberX = new UberX ("CVB123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
$UberX->printDataCar();

$UberPool = new UberPool ("ASD123", new Account("Andrea Fernandez", "AND456"), "Dodge", "Attitude");
$UberPool->printDataCar();