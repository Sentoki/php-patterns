<?php

namespace interfaceVariant\WeatherData;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer);
    
    public function removeObserver(ObserverInterface $observer);
    
    public function notifyObserver();
}