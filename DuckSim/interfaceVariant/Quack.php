<?php

namespace interfaceVariant;

class Quack implements QuackInterface
{
    public function quack()
    {
        echo "default quack implementation\n";
    }
}