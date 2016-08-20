<?php

require_once 'SubjectInterface.php';
require_once 'WeatherDataInterface.php';

class WeatherData extends SubjectAbstract
{
    public function removeObserver(ObserverInterface $observer)
    {
        // TODO: Implement removeObserver() method.
    }

    public function dataChanged()
    {
        $this->getPress();
        $this->getHum();
        $this->getTemp();
        
        $this->notifyObserver();
    }

}