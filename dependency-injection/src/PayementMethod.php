<?php

namespace App;

abstract class PayementMethod
{
    abstract public function processPayement(): string;
}