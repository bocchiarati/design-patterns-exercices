<?php

namespace App;

abstract class ComputerDecorator
{
    public function __construct(protected Computer $computer)
    {}

    public function getPrice(): int
    {
        return $this->computer->getPrice();
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription();
    }
}