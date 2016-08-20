<?php

require_once 'PizzaStoreAbstract.php';

class BarnaulPizzaStore extends PizzaStoreAbstract
{
    public function createPizza()
    {
        return new Pizza('Барнаульская');
    }
}