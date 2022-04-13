<?php

include 'MovableInterface.php';
include 'VehicleAbstract.php';
include 'Vehicle.php';
include 'Sedan.php';
include 'Coupe.php';

$sedanCar = new Sedan('Kia', 'RIO MY21', 200);
$sedanCar->start();
$sedanCar->up(50);
$sedanCar->up(500);
$sedanCar->down(20);
$sedanCar->down(200);
$sedanCar->stop();

$coupeCar = new Coupe('Chevrolet', 'Corvette', 325);
$coupeCar->start();
$coupeCar->up(50);
$coupeCar->up(500);
$coupeCar->down(20);
$coupeCar->down(500);
$coupeCar->stop();

