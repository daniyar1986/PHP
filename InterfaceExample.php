<?php

interface  InterfaceExample{

    public function getName();

}

interface SecondInterface{
    public function getStatus();
}

interface ThirdInterface extends InterfaceExample, SecondInterface{

}

class Test implements ThirdInterface {
    public $name = "Danik";
    public $status = "Admin";

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;
    }

}

$user = new Test();
$user->getStatus();
$user->getName();

