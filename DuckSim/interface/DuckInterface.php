<?php

interface FlyInterface
{
    public function fly();

}

interface QuackInterface
{
    public function quack();
}

class Duck
{
    /** @var  FlyInterface */
    private $flyBehaviour;
    /** @var  QuackInterface */
    private $quackBehaviour;

    public function setFlyBehaviour(FlyInterface $flyInterface){
        $this->flyBehaviour = $flyInterface;
    }

    public function setQuackBehaviour(QuackInterface $quackInterface){
        $this->quackBehaviour = $quackInterface;
    }
    
    public function fly()
    {
        $this->flyBehaviour->fly();
    }
    
    public function quack()
    {
        $this->quackBehaviour->quack();
    }
}

class SimpleQuack implements QuackInterface
{
    public function quack()
    {
        echo "quack quack\n";
    }
}

class SimpleFly implements FlyInterface
{
    public function fly()
    {
        echo "fly\n";
    }
}

$duck = new Duck();
$duck->setFlyBehaviour(new SimpleFly());
$duck->setQuackBehaviour(new SimpleQuack());

$duck->fly();
$duck->quack();