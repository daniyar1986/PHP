<?php

//class Base{
//    function sayHello(){
//        echo "Hello";
//    }
//}

trait Hello{
    function sayHello(){
        echo "Hello";
    }
}
trait World{
    function sayWorld(){
//        parent::sayHello();
        echo " World";
    }
}

class MyHelloWorld {
    use Hello,World;
}

$obj = new  MyHelloWorld();
$obj->sayHello();
$obj->sayWorld();
