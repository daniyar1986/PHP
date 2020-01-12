<?php

$a = 5;
$b = $a;

$a = ($b =10);

$a = $b = 10;

$c = 10;
$b = $c +10;

echo $b;

$text= '\'Hello\\';
echo $text;

$text2 = "\n \t Text";
echo $text2;

echo $text2[7];

$x = -17;
$x = $x<0 ? -$x : $x;
echo $x;