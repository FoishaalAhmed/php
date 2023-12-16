<?php

abstract class Dumper
{
	abstract public function dump($data);
}

abstract class WebDumper extends Dumper
{
	abstract public function test($data) ;

}

class test extends WebDumper
{
    public function dump($data)
    {
        echo 'abcd';
    }

	public function test($data)
    {
    	echo $data;
    }
}

$webDumper = new test();
$webDumper->dump('data2');