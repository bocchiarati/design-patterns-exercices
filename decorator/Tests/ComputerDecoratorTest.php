<?php

namespace Test;

use App\GpuDecorator;
use App\OLEDScreenDecorator;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptop = new GpuDecorator($laptop);
        $this->assertSame(820, $laptop->getPrice());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptop = new OLEDScreenDecorator($laptop);
        $this->assertSame(500, $laptop->getPrice());
    }
}