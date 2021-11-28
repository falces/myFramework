<?php

namespace App\Controllers;

class User
{
    private $name;

    public function __construct(
        string $name
    )
    {
        $this->setName($name);
    }

    public function setName(
        string $name
    ): User
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }
}