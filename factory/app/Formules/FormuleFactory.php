<?php

namespace App\Formules;

class FormuleFactory
{
    public function createFormule(string $formule = 'basic'): Formule
    {
        $className = "App\\Formules\\".ucfirst($formule)."\\Formule";

        if(!class_exists($className)) throw new \Exception('La classe '.$className.'n\'existe pas !');

        return new $className;
    }
}