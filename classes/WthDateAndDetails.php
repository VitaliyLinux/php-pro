<?php

namespace classes;

class WthDateAndDetails implements Iformat
{
    public function getFormat($string): string
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}