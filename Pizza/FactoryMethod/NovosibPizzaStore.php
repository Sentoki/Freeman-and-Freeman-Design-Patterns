<?php

require_once 'PizzaStoreAbstract.php';

class NovosibPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        echo 'NovosibPizza pizza created';
    }
}