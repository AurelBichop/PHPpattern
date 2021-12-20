<?php

namespace App\Messages;


class MessageGenerator
{
    public function generate(MessageInterface $message): string
    {

        return $message->getType() .' '. $message->getColor();
    }
}