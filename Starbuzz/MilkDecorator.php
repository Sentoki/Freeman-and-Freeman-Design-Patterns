<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 19.06.16
 * Time: 22:38
 */

require_once 'CoffeeDecorator.php';

class MilkDecorator extends CoffeeDecoratorAbstract
{
    private $description = ', с молоком';
    
    public function getCost()
    {
        return 2;
    }
}