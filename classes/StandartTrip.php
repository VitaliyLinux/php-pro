<?php

namespace classes;

class StandartTrip extends Trip
{
    public function getTaxi(): Taxi
    {
        return new Standart();
    }
}