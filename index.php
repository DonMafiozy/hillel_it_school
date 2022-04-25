<?php

include 'bootstrap.php';

use Ithillel\Auto\Coupe;
use Ithillel\Auto\Accessories\Accessory;
use Ithillel\Auto\Driver;

$accessories = [
    new Accessory('Coupe Wind Restrictor Glow Plate', 499),
    new Accessory('Coverking Sun Shield / Shade', 45),
    new Accessory('CORVETTE STORMPROOF OUTDOOR CAR COVER', 499),
];

$car = new Coupe('Chevrolet', 'Corvette', 340, $accessories);

$driver = new Driver('Oleg', 42);
$driver->move($car, 'Kiev');

