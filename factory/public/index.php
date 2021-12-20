<?php

require '../vendor/autoload.php';


$factory = new \App\Formules\FormuleFactory();

$basicFormule = $factory->createFormule('d');

dd($basicFormule);