<?php

namespace App;

class Paypal extends PayementMethod
{

    public function processPayement(): string
    {
        return 'Paiment avec Paypal ;-)';
    }
}