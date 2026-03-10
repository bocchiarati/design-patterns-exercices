<?php

namespace App;

class OLEDScreenDecorator extends ComputerDecorator
{
    public function __construct(protected Computer $computer)
    {
        parent::__construct($computer);
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 100;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . '\n Avec Écran OLED';
    }
}