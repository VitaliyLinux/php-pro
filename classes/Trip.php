<?php

namespace classes;

abstract class Trip
{
    abstract public function getTaxi(): Taxi;

    public function getTrip()
    {
        $taxi = $this->getTaxi();
        $taxi->showModel();
        $taxi->getPrice();
    }
}