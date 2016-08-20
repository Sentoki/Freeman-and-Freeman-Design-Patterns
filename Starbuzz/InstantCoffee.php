<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 22:42
 */

require_once 'Coffee.php';

class InstantCoffee extends Coffee
{
    private $description = ', растворимый';
    
    private $price = 5;

    public function getCost()
    {
        return parent::getCost() + $this->price;
    }
}