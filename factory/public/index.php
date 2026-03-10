<?php
require('../vendor/autoload.php');

use App\Factory\VeichuleFactory;
$factory = new VeichuleFactory();
$veichule = $factory->selectRandomVeichule();

echo 'Aleatoire <br>';
echo $veichule->getCostPerKm() . ' ' . $veichule->getFuelType();

echo '<br><br>';

echo 'Pour - de 20kg <br>';
$veichule = $factory->selectVeichuleByWeigth(19);
echo $veichule->getCostPerKm() . ' ' . $veichule->getFuelType();

echo '<br><br>';

echo 'Pour - de 200kg <br>';
$veichule = $factory->selectVeichuleByWeigth(60);
echo $veichule->getCostPerKm() . ' ' . $veichule->getFuelType();

echo '<br><br>';

echo 'Pour + plus de 200kg <br>';
$veichule = $factory->selectVeichuleByWeigth(201);
echo $veichule->getCostPerKm() . ' ' . $veichule->getFuelType();