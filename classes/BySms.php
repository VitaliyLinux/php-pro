<?php

namespace classes;

class BySms implements Idelivery
{
    public function getDeliver($srting): string
    {
        return "Вывод формата $srting в смс";
    }
}