<?php

namespace abstractVariant\WeatherData;

abstract class SubjectInterface
{
    protected $observers = [];

    public function addObserver(AbstractDisplay $observer)
    {
        $this->observers[] = $observer;
        echo "Добавлен наблюдатель: {$observer->getName()}\n\n";
    }

    public function removeObserver(AbstractDisplay $observerForRemoving)
    {
        /** @var ObserverTrait $observer */
        foreach ($this->observers as $key => $observer){
            if($observer === $observerForRemoving) {
                echo "Удалён наблюдатель: {$observer->getName()}\n\n";
                unset($this->observers[$key]);
            }
        }
    }

    public function notifyObserver()
    {
        /** @var ObserverTrait $observer */
        foreach ($this->observers as $observer){
            $observer->update($this->temp, $this->hum, $this->press);
        }
    }
}