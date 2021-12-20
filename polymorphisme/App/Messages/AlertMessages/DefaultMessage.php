<?php

namespace App\Messages\AlertMessages;

use App\Messages\MessageInterface;

class DefaultMessage implements MessageInterface
{
    public function getType(): string
    {
        return 'default';
    }

    public function getColor(): string
    {
        return 'color';
    }
}