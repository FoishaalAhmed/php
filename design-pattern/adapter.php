<?php

interface BookInterface {
    function open();
    function turnPage();
}

interface eReaderInterface {
    function open();

    function clickNextButton();
}

class Book implements BookInterface
{
    
    function open()
    {
        echo 'Opening a book';
    }

    function turnPage()
    {
        echo 'turning a page';
    }
}

class eBook implements eReaderInterface
{
    function open()
    {
        echo 'Opening an ebook';
    }

    function clickNextButton()
    {
        echo 'turning an ebook page';
    }
}



class ReaderAdepter implements BookInterface
{
    private $reader;

    function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    function open()
    {
        $this->reader->open();
    }

    function turnPage()
    {
        $this->reader->clickNextButton();
    }
}

class Person 
{
    function read(BookInterface $reader)
    {
        $reader->open();
        $reader->turnPage();
    }
}

(new Person())->read(new ReaderAdepter(new eBook));



