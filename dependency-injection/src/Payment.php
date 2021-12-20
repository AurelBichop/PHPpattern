<?php

namespace App;

class Payment
{
    private PayementMethod $payementMethod;

    public function __construct(PayementMethod $paymentMethod){
        $this->payementMethod = $paymentMethod;
    }

    public function processPayement(): bool
    {
        echo $this->getPayementMethod()->processPayement();

        return true;
    }


    /**
     * @return PayementMethod
     */
    public function getPayementMethod(): PayementMethod
    {
        return $this->payementMethod;
    }
}