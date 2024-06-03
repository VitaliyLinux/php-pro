<?php

require_once __DIR__ . '/vendor/autoload.php';

use classes\EconomTrip;
use classes\StandartTrip;
use classes\LuxTrip;

$mytrip = new EconomTrip();
$mytrip->getTaxi();
$mytrip->getTrip();
echo "<br>";

$mytrip = new StandartTrip();
$mytrip->getTaxi();
$mytrip->getTrip();
echo "<br>";

$mytrip = new LuxTrip();
$mytrip->getTaxi();
$mytrip->getTrip();
