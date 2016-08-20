<?php

require_once 'PizzaFactoryAbstract.php';

class CheapPizza extends PizzaFactoryAbstract
{
    public function createPizza()
    {
        echo "создали пиццу\n";
    }
}