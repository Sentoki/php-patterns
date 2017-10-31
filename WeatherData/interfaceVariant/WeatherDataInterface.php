<?php

namespace interfaceVariant\WeatherData;

interface WeatherDataInterface
{
    public function getTemp();

    public function getHum();

    public function getPress();
    
    public function dataChanged();
}