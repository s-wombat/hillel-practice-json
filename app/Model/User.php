<?php

namespace App\Model;

class User
{
    private int $age;
    private string $name;

    // Getters
    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    // Setters
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}