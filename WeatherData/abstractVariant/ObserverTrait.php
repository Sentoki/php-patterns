<?php

namespace abstractVariant\WeatherData;

trait ObserverTrait
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function update($temp, $hum, $press)
    {
        $this->temp = $temp;
        $this->hum = $hum;
        $this->press = $press;

        $this->displayInfo();
    }
}