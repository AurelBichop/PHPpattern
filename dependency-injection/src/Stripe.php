<?php

namespace App;

class Stripe extends PayementMethod
{

    public function processPayement(): string
    {
        return 'Paiment avec Stripe ;-)';
    }
}