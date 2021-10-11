<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue',1 );
var_dump($bike);

echo $bike-> forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo '<br><hr>';

require_once 'Car.php';
$auto = new Car('green', 5, 'electric');
var_dump($auto);

echo $auto-> forward();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();
echo '<br>Vitesse de la voiture : ' . $auto->getCurrentSpeed() . 'km/h' . '<br>';
echo $auto-> brake();

echo'<br><hr>';

require_once 'Truck.php';
$truck = new Truck('black', 3, 6,'fuel');
var_dump($truck);

echo $truck-> forward();
echo '<br>Vitesse du camion : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck-> brake();
echo '<br>Vitesse du camion : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck-> brake();
echo'<br>Capacité du camion : ' . $truck->getCapacity() . 'tonnes' . '<br>';
echo 'Stock actuel: ' . $truck->getStock() . 'tonnes' . '<br> Etat: <br>';
echo $truck-> isFull();