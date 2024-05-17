<?php

class Equals
{
    // Method equals
    public function equals(RGB $color_one, RGB $color_two): bool
    {
        if($color_one->getRed() === $color_two->getRed() && $color_one->getGreen() === $color_two->getGreen() &&
            $color_one->getBlue() === $color_two->getBlue()){
            return true;
        }
        return false;
    }

    // Method Mix
    public function mix(RGB $color_one, RGB $color_two): RGB
    {
        return new RGB(   intdiv(($color_one->getRed() + $color_two->getRed()), 2),
            intdiv(($color_one->getGreen() + $color_two->getGreen()), 2),
            intdiv(($color_one->getBlue() + $color_two->getBlue()), 2));

    }
}