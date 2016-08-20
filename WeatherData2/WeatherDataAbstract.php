<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 21:51
 */

abstract class WeatherDataAbstract
{
    private $hum = 0;
    private $temp = 0;
    private $press = 0;
    
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
    
    public function dataChanged(){
        
    }

    abstract function aaa();
}