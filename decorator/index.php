<?php

use App\ExtraCoffeeMachine;
use App\ExtraGarden;
use App\RentRoomClass;

require './vendor/autoload.php';

$reservation = new RentRoomClass();
$reservation = new ExtraCoffeeMachine($reservation);
$reservation = new ExtraGarden($reservation);


dd($reservation->calculatePrice());