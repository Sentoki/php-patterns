<?php

namespace abstractVariant\WeatherData;

abstract class AbstractDisplay
{
    protected $temp;
    protected $hum;
    protected $press;
    protected $name;

    public function displayInfo()
    {
        echo "Дисплей: {$this->name}\n";
        echo "Давление: {$this->press}\n";
        echo "Температура: {$this->temp}\n";
        echo "Влажность: {$this->hum}\n\n";
    }
}