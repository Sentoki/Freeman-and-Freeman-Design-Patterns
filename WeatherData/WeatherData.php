<?php

require_once 'SubjectInterface.php';
require_once 'WeatherDataInterface.php';

class WeatherData implements SubjectInterface, WeatherDataInterface
{
    private $observers = [];

    private $hum = 0;
    private $temp = 0;
    private $press = 0;

    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        // TODO: Implement removeObserver() method.
    }

    public function notifyObserver()
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer){
            $observer->update($this->temp, $this->hum, $this->press);
        }
    }

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