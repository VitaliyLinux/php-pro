<?php

namespace classes;

class ByEmail implements Idelivery
{
    public function getDeliver($srting): string
    {
        return "Вывод формата $srting по имейл";
	}
}