<?php


abstract class Phone
{
    public $type;
    public $color;

    abstract public function getColor();

}

class Mobile extends Phone{
    public function getColor()
    {
        echo  "Black from Mobile Class\n";
    }

}

class Home extends Phone{
    public function getColor()
    {
        echo "White from Home Class";
    }

}

$mobile = new Mobile();
$mobile->getColor();

$home = new Home();
$home->getColor();