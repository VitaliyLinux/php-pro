<?php

namespace classes;

class User
{
    private string $name;
    private string $age;
    private string $email = 'dd';

    private function setName($name): void
    {
        $this->name = $name;
    }

    private function setAge($age): void
    {
        $this->age = $age;
    }

    protected function setEmail($email): void
    {
        $this->email = $email;
    }

    protected function getName($name): string
    {
        return $this->name;
    }

    protected function getAge($age): string
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            call_user_func_array([$this, $name], $arguments);
        } else
            echo "Методу $name не існує";
    }

    public function getAll()
    {
        $this->getName();
        echo '<br>';

        $this->getAge();
        echo '<br>';

        $this->getEmail();
        echo '<br>';
    }
}
