<?php

namespace abstractVariant\WeatherData;

class Display extends AbstractDisplay
{
    use ObserverTrait;

    public function __construct($name)
    {
        $this->setName($name);
    }
}