<?php

class File
{
    private $handle;

    public function __construct(private $filename, $mode = 'r')
    {
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }

    public function __destruct()
    {
        // close the file handle
        if ($this->handle) {
            fclose($this->handle);
            return 1;
        }
    }

    public function read()
    {
        // read the file contents
        return fread($this->handle, filesize($this->filename));
    }
}

// $f = new File('test.txt');
// echo $f->read();


class BankAccount
{

    public function __construct(public float $balance = 0)
    {
        $this->balance = $balance;
    }
}

$account = new BankAccount('10');
var_dump($account->balance); // 0

