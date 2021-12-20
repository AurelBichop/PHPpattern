<?php

namespace App;

class ExtraGarden extends RentRoomDecorator
{
    private const GARDEN_PRICE = 100;

    public function calculatePrice(): int
    {
        return $this->rentRoom->calculatePrice() + self::GARDEN_PRICE;
    }
}