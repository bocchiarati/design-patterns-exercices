<?php

namespace App\Entity;

interface Veichule
{
    public function __construct($costPerKm, $fuelType) ;

    public function getCostPerKm() ;

    public function getFuelType() ;
}