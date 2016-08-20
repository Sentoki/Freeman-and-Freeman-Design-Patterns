<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 22:38
 */

class Coffee
{
    private $coffee = null;
    private $description = 'Кофе';
    
    public function __construct(Coffee $coffee = null)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return 0;
    }

    public function getDescription()
    {
        $debug = isset($this->coffee) ? $this->coffee->getDescription() : '';
        return ( $this->coffee ? $this->coffee->getDescription() : '' ) . $this->description;
    }
}