<?php

namespace interfaceVariant\WeatherData;

interface ObserverInterface
{
    public function setName($name);

    public function getName();

    public function update($temp, $hum, $press);
}