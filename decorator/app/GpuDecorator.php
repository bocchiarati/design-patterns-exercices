<?php

namespace App;

class GpuDecorator extends ComputerDecorator
{
    public function __construct(protected Computer $computer)
    {
        parent::__construct($computer);
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 420;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . '\n Avec GPU AMD RX9060XT 16GB';
    }
}