<?php

namespace interfaceVariant\WeatherData;

class Display implements DisplayInterface, ObserverInterface
{
    private $temp;
    private $hum;
    private $press;
    private $name;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function displayInfo()
    {
        echo "Дисплей: {$this->name}\n";
        echo "Давление: {$this->press}\n";
        echo "Температура: {$this->temp}\n";
        echo "Влажность: {$this->hum}\n\n";
    }
    
    public function update($temp, $hum, $press)
    {
        $this->temp = $temp;
        $this->hum = $hum;
        $this->press = $press;
        
        $this->displayInfo();
    }
}