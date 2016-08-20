<?php

require_once 'IngredientFactoryAbstract.php';

abstract class PizzaFactoryAbstract
{
    public $ingredientFactory = null;
    private $sause = null;
    private $meat = null;
    private $dough = null;
    
    public function __construct(IngredientFactoryAbstract $ingredientFactory)
    {
        $this->sause = $ingredientFactory->createSauce();
        $this->meat = $ingredientFactory->createMeat();
        $this->dough = $ingredientFactory->createDough();
    }

    abstract function createPizza();
}