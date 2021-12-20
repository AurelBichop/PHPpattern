<?php

use App\Payment;
use App\Paypal;
use App\Stripe;

require './vendor/autoload.php';


$paypal = new Paypal();

$stripe = new Stripe();

$payment = new Payment($stripe);
$payment->processPayement();
