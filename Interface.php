<?php

interface NewsLetter
{
    const  a = 'abcd';

    function subscribe($email);
}


class WeeklyNewsLetter implements NewsLetter
{
    function subscribe($email)
    {
        die(self::a);
        die('WeeklyNewsLetter');
    }
}


class MonthlyNewsLetter implements NewsLetter
{
    function subscribe($email)
    {
        die('MonthlyNewsLetter');
    }
}

class SendNewsLetter
{
    function store(NewsLetter $newsLetter)
    {
        $newsLetter->subscribe('test email');
    }
}

class test
{
    function subscribe($email)
    {
        die('MonthlyNewsLetter');
    }
}


$controller = new SendNewsLetter;
$controller->store(new WeeklyNewsLetter);


