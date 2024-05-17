<?php

include_once "classes/RGB.php";
include_once "classes/equals.php";

$color_one = new RGB(32,253,122);
$color_two = new RGB(32,253,122);

$eq = new Equals();

if($eq->equals($color_one, $color_two))
    echo "Colors " . $color_one->getRGB() . " and " . $color_two->getRGB() ." is equal";
else
    echo "Colors " . $color_one->getRGB() . " and " . $color_two->getRGB() ." is not equal";

echo "<br><br>";

$color = RGB::random();

echo $color->getRGB();

$color_one = new RGB(3,23,12);
$color_two = new RGB(32,3,122);

echo "<br><br>";

echo $eq->mix($color_one, $color_two)->getRGB();



