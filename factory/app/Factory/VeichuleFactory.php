<?php

namespace App\Factory;

use App\Entity\Truck;
use App\Entity\Car;
use App\Entity\Bicycle;
use App\Entity\Veichule;

class VeichuleFactory
{
    public function selectRandomVeichule(){
        $random = random_int(1,3);
        return match ($random) {
            1 => new Bicycle(0.01, "human energy"),
            2 => new Car(0.12, "essence"),
            default => new Truck(0.2, "diesel"),
        };
    }
    public function selectVeichuleByWeigth(int $weight) : Veichule {
        if($weight < 20){
            return new Bicycle(0.01, "human energy");
        } elseif ($weight < 200) {
            return new Car(0.12, "essence");
        } else {
            return new Truck(0.2, "diesel");
        }
    }
}