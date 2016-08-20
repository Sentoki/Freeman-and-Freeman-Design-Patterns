<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 21:51
 */

interface WeatherDataInterface
{
    public function getTemp();

    public function getHum();

    public function getPress();
    
    public function dataChanged();
}