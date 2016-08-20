<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 21:52
 */

abstract class SubjectAbstract extends WeatherDataAbstract
{
    private $observers = [];
    
    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }
    
    public function removeObserver(ObserverInterface $observer)
    {}

    public function notifyObserver()
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer){
            $observer->update($this->temp, $this->hum, $this->press);
        }
    }
}