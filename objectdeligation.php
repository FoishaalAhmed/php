<?php

class A
{
    public function aFunc()
    {
        echo __CLASS__;
    }

}

class B
{
    public function bFunc()
    {
        echo __CLASS__;
    }
}

class C
{
    private $_a;
    private $_b;

    public function __construct()
    {
        $this->_a = new A();
        $this->_b = new B();
    }

    public function aFunc()
    {
        $this->_a->aFunc();
    }

    public function bFunc()
    {
        $this->_b->bFunc();
    }

    public function cFunc()
    {
        echo __CLASS__;
    }
}

$cObj = new C();
$cObj->aFunc();
$cObj->bFunc();
$cObj->cFunc();