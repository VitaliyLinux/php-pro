<?php

namespace classes;

class LuxTrip extends Trip
{
    public function getTaxi(): Taxi
    {
        return new Lux();
    }
}