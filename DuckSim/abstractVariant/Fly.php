<?php

namespace abstractVariant;

use interfaceVariant\FlyInterface;

class Fly implements FlyInterface
{
    public function fly()
    {
        echo "default fly implementation\n";
    }
}