<?php

interface Coffee {
    function cost();
}

class SimpleCoffee implements Coffee
{
    public function cost()
    {
        return 10;
    }
}

abstract class CoffeeDecorator implements Coffee
{
    public function __construct(private Coffee $coffee) 
    {
        
    }

    function cost()
    {
        return $this->coffee->cost();
    }
}

class MilkDecorator extends CoffeeDecorator
{
    function cost()
    {
        return parent::cost() + 5;
    }
}

class SugarDecorator extends CoffeeDecorator
{
    function cost()
    {
        return parent::cost() + 3;
    }
}

$coffee = new SugarDecorator(new MilkDecorator(new SimpleCoffee()));

echo $coffee->cost();


