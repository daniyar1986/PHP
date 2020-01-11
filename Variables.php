<?php

$int_var = 5;
echo gettype($int_var);
$double_var = 5.0;
echo "\n".gettype($double_var);
$string_var = "Hello";
echo "\n".gettype($string_var);
$boolean_var = false;
echo "\n".gettype($boolean_var);
$null_var = null;
echo "\n".gettype($null_var);

if (isset($int_var)){
    echo "\nVariable exists ".$int_var;
}

echo "\n".$int_var;
unset($int_var);
//echo  $int_var; Variable deleted by method unset

define("PI",3.14);
echo "\n".PI;

$array = array('a' => 'apple', 'b' => 'car', 'c'=>'dog');

print_r($array);
