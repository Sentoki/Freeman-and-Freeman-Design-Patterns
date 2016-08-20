<?php

require_once 'CheapPizza.php';
require_once 'CheapIngredients.php';

$cheapIngredient = new CheapIngredients();

$pizza = new CheapPizza($cheapIngredient);

$pizza->createPizza();

