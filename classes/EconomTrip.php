<?php

namespace classes;

class EconomTrip extends Trip
{
    public function getTaxi(): Taxi
    {
        return new Econom();
    }
}