<?php
include 'bootstrap.php';

use RusDieInfo\Statistic;

$dieInfo = new Statistic();
$data = $dieInfo->getAsArrayByDate('27.04.2022');

foreach ($data as $key => $value)
{
    echo $key . ':' . $value . PHP_EOL;
}
