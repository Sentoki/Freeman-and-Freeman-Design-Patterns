<?php

require_once 'Pizza.php';

abstract class PizzaStoreAbstract
{
    public $region = null;
    
    const BARNAUL = 'barnaul';
    const NOVOSIB = 'novosib';
    
    public function __construct($region)
    {
        $this->region = $region;
    }

    abstract function createPizza();
}