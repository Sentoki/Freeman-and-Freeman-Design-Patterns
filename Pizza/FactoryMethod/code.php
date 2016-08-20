<?php

require_once 'BarnaulPizzaStore.php';
require_once 'NovosibPizzaStore.php';

$brnStore = new BarnaulPizzaStore(PizzaStoreAbstract::BARNAUL);

/** @var Pizza $pizza */
$pizza = $brnStore->createPizza();

$pizza->printName();