<?php

class Car
{
    public function __construct()
    {
        echo "Car Constructor\n";
    }
}

class Electric extends Car
{
    public function __construct()
    {
        parent::__construct();  // Call the parent class constructor
        echo "Electric Constructor\n";
    }
}

class Gasoline extends Car
{
    public function __construct()
    {
        parent::__construct();  // Call the parent class constructor
        echo "Gasoline Constructor\n";
    }
}

class Hybrid extends Electric
{
    public function __construct()
    {
        parent::__construct();  // Call the parent class constructor
        echo "Hybrid Constructor\n";
    }
}

$hybrid = new Hybrid();
