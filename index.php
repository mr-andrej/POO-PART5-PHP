<?php

// index.php

require_once 'car.php';
require_once 'bicycle.php';
require_once 'vehicle.php';
require_once 'truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$BMW = new Car("pink", "5", "diesel");
try {
    echo "Trying to start my car!<br>";
    $BMW->start();
} catch(Exception $e) {
    $BMW->setHasParkBrake(false);
    echo $e->getMessage() . " I pushed it down! Trying to start again...<br>";
} finally {
    echo "My car drives like a donut";
}