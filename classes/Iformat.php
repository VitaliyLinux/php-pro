<?php

namespace classes;

interface Iformat
{
    public function getFormat($string): string;
}