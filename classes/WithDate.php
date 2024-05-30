<?php

namespace classes;

class WithDate implements Iformat
{
    public function getFormat($string): string
    {
        return date('Y-m-d H:i:s') . $string;
    }
}