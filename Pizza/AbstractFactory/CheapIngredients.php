<?php

require_once 'IngredientFactoryAbstract.php';

class CheapDough
{
    public function __construct()
    {
        echo "Создали дешёвое тесто\n";
    }

}

class CheapMeat
{

}

class CheapSauce
{

}

class CheapIngredients extends IngredientFactoryAbstract
{
    public function createDough()
    {
        return new CheapDough();
    }

    public function createMeat()
    {
        return new CheapMeat();
    }

    public function createSauce()
    {
        return new CheapSauce();
    }

}