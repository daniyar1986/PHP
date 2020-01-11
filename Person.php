<?php


class Person
{
    public static $name;

    static function hello(){
        echo "\nHello ";
        return self::$name;
    }
}

Person::$name = "Danik";

echo Person::$name;
echo Person::hello();