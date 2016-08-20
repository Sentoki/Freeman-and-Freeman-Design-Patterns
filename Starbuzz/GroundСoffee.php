<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 22:42
 */

require_once 'Coffee.php';

class GroundCoffee extends Coffee
{
    private $description = ', молотый';
    
    private $price = 10;
    
    public function getCost()
    {
        return parent::getCost() + $this->price;
    }
}