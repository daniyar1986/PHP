<?php


class ProtectedExample
{
    protected $info;
}

class ProtectedExample2 extends ProtectedExample{
    function test(){
        $this->info = "info";
        echo $this->info;
    }
}

$test2 = new ProtectedExample2();
$test2->test();
//$test2->info = "information"; you can not access protected value