<?php

include 'bootstrap.php';

use Ithillel\Auto\Sedan;
use Ithillel\Auto\Suv;

echo 'The count of driving wheels for Mercedes-Benz GL-clas is: '  . Suv::getDrivingWheels() . PHP_EOL;

echo 'Count of driving wheels for Sedan usually ' . Sedan::getDrivingWheels() . PHP_EOL;

$suv = new Suv('Lexus', 'LX570', 2015);
echo $suv->getDescription() . PHP_EOL;

$offer = new \Ithillel\Offer\Sedan();

echo $offer->getTitle('Toyota') . PHP_EOL;

