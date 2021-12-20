<?php

namespace App\Formules\Premium;

use App\Formules\Formule as FormuleBase;

class Formule extends FormuleBase
{
    const privce = 50;
    protected array $informations = ['Pix de 50€ mais toutes les garanties sont comprise !'];

    public function getPrice(): int
    {
        return  self::privce;
    }
}