<?php

namespace App\Messages\AlertMessages;

use App\Messages\MessageInterface;

class WarningMessage implements MessageInterface
{

    public function getType(): string
    {
        return 'warning';
    }

    public function getColor(): string
    {
        return 'blue';
    }
}