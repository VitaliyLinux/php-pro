<?php

require_once __DIR__ . '/vendor/autoload.php';

use classes\User;

$user = new User();

$user->get();
echo '<br>';

$user->setEmail('frend@gmail.com');
echo $user->getEmail();



