<?php

class Base{
    function sayHello(){
        echo "Hello";
    }
}
trait Hello{
    function sayHello(){
        echo "Hello";
    }
}
trait sayWorld{
    function sayHello(){
        parent::sayHello();
        echo " World";
    }
}

class MyHelloWorld extends Base{
    use sayWorld;
}

$obj = new  MyHelloWorld();
$obj->sayHello();
