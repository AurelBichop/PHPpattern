<?php

namespace App;

class ExtraCoffeeMachine extends RentRoomDecorator
{
    private const COFFEE_PRICE = 50;

    public function calculatePrice(): int
    {
        return $this->rentRoom->calculatePrice() + self::COFFEE_PRICE;
    }
}