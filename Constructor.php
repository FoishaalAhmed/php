<?php class User
{
    //constructor promotion
    public function __construct(private string $name, private int $age)
    {
        echo $this->name;
        echo $this->age;
    }
}

new User('foisal', 12);