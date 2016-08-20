<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 08.06.16
 * Time: 22:04
 */

require_once 'DisplayInterface.php';
require_once 'ObserverInterface.php';

class Display implements DisplayInterface, ObserverInterface
{
    private $temp;
    private $hum;
    private $press;
    
    public function displayInfo()
    {
        echo "Давление: {$this->press}\n";
        echo "Температура: {$this->temp}\n";
        echo "Влажность: {$this->hum}\n";
    }
    
    public function update($temp, $hum, $press)
    {
        $this->temp = $temp;
        $this->hum = $hum;
        $this->press = $press;
        
        $this->displayInfo();
    }
}