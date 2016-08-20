<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 23:30
 */

require_once 'GroundСoffee.php';
require_once 'MilkDecorator.php';
require_once 'ChocoDecorator.php';

$coffee_0 = new Coffee();

$coffee_1 = new GroundCoffee($coffee_0);

$coffee_2 = new MilkDecorator($coffee_1);
$coffee = new ChocoDecorator($coffee_2);

echo $coffee->getDescription();