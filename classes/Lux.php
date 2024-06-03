<?php

namespace classes;

use classes\Taxi;

class Lux implements Taxi
{
    private string $carModel = 'BMW';
    private float $tripPrice = 21.20;

    public function showModel(): void
    {
        echo "Lux car model is $this->carModel. ";
    }

    public function getPrice(): void
    {
        echo "Trip price is $this->tripPrice for km. It`s a expensive price.";
    }
}