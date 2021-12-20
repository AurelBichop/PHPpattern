<?php

namespace App\Messages;

interface MessageInterface
{
    public function getType():string;
    public function getColor():string;
}