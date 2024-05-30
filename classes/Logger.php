<?php

namespace classes;

class Logger
{
    private Iformat $format;
    private Idelivery $delivery;

    public function __construct($format, $delivery)
    {
        if (!($format instanceof Iformat)) {
            die('Error format');
        } elseif (!($delivery instanceof Idelivery)) {
            die('Error deliver');
        } else {
            $this->format = $format;
            $this->delivery = $delivery;
        }
    }

    public function log($string): void
    {
        echo $this->delivery->getDeliver($this->format->getFormat($string));
    }
}