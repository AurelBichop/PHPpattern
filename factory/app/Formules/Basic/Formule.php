<?php

namespace App\Formules\Basic;

use App\Formules\Formule as FormuleBase;

class Formule extends FormuleBase
{
    const privce = 0;
    protected array $informations = ['Pix gratuit mais aucune garantie !'];

    public function getPrice(): int
    {
        return  self::privce;
    }
}