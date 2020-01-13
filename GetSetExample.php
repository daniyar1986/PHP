<?php


class GetSetExample
{
    private $number = 1;

    public function __get($name)
    {
        echo "You get {$name}";
    }

    public function __set($name, $value)
    {
        echo "You set {$name} to {$value}";
    }
}

$getSetExample = new GetSetExample();

echo $getSetExample->number;
echo "\n";
$getSetExample->number = 689;