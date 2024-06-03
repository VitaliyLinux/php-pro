<?php

namespace classes;

use classes\Taxi;

class Standart implements Taxi
{
    private string $carModel = 'Toyota';
    private float $tripPrice = 14.70;

    public function showModel(): void
    {
        echo "Standart car model is $this->carModel. ";
    }

    public function getPrice(): void
    {
        echo "Trip price is $this->tripPrice for km. It`s a average price.";
    }
}