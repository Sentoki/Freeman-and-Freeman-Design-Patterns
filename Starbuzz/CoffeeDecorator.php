<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 22:38
 */

require_once 'Coffee.php';

abstract class CoffeeDecoratorAbstract extends Coffee
{
    public function getCost()
    {
        return 0;
    }
}