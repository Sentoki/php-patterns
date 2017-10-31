<?php

namespace abstractVariant\WeatherData;

class WeatherData extends SubjectInterface implements WeatherDataInterface
{

    protected $hum = 0;
    protected $temp = 0;
    protected $press = 0;

    public function getHum()
    {
        $this->hum = rand(60, 90);
    }

    public function getTemp()
    {
        $this->temp = rand(20, 30);
    }

    public function getPress()
    {
        $this->press = rand(630, 640);
    }

    public function dataChanged()
    {
        $this->getPress();
        $this->getHum();
        $this->getTemp();
        
        $this->notifyObserver();
    }

}