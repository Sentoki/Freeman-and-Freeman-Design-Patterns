<?php


class Pizza
{
    private $name = null;
    
    public function __construct($name)
    {
        $this->name = $name;
    }    
    
    public function printName()
    {
        echo $this->name."\n";
    }
}