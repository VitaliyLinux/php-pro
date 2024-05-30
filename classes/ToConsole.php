<?php

namespace classes;

class ToConsole implements Idelivery
{
    public function getDeliver($srting): string
    {
        return "Вывод формата $srting в консоле";
    }
}