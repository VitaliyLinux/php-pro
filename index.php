<?php

require_once __DIR__ . '/vendor/autoload.php';

use classes\ByEmail;
use classes\Logger;
use classes\Raw;
use classes\WithDate;
use classes\BySms;
use classes\ToConsole;
use classes\WthDateAndDetails;

$raw = new Raw();

$withdate = new WithDate();

$byemail = new ByEmail();

$bysms = new BySms();

$string = 'ddd';

$withDateAndDetails = new WthDateAndDetails();

$toConsole = new ToConsole();

$logger = new Logger($withDateAndDetails, $toConsole);

$logger->log('Emergency error! Please fix me!');



