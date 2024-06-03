<?php

namespace classes;

use classes\Taxi;

class Econom implements Taxi
{
    private string $carModel = 'Lanos';
    private float $tripPrice = 10.50;

    public function showModel(): void
    {
        echo "Econom car model is $this->carModel. ";
    }

    public function getPrice(): void
    {
        echo "Trip price is $this->tripPrice for km. It`s a cheapest price.";
    }
}