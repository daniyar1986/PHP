<?php

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

class ConstantExample
{
    const MIN_VALUE = 0;
    const MAX_VALUE = 1;

    static function getMinValue(){
        return self::MIN_VALUE;
    }


    static function getMaxValue(){
        return self::MAX_VALUE;
    }
}

echo "Min value outside class = ".MIN_VALUE;
echo "\nMax value outside class = ".MAX_VALUE;

echo "\nMin value in class = ".ConstantExample::getMinValue();
echo "\nMax value in class = ".ConstantExample::getMaxValue();