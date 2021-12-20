<?php

namespace App;

use App\RentRoomInterface;

class RentRoomClass implements RentRoomInterface
{

    public function calculatePrice(): int
    {
        return 100;
    }
}