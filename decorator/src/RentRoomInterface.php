<?php

namespace App;

interface RentRoomInterface
{
    public function calculatePrice(): int;
}