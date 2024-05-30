<?php

namespace classes;

class Raw implements Iformat
{
    public function getFormat($string): string
    {
        return $string;
    }
}