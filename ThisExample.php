<?php


class ThisExample
{
    public $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        echo $this->name;
        $this->test();
    }

    public function test(){
        echo " Test";
    }


}

$thisExample = new ThisExample();
$thisExample->name = "Danik";
$thisExample->getName();