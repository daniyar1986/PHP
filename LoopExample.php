<?php

$item = 11;

if ($item<10){
    echo "Ypu get 10% discount";
} else {
    echo "You get 5% discount";
}
echo "\n";
$i = 0;
while ($i < 32){
    echo $i += 1;
}
echo "\n";
$x = 1;

do{
    echo "x".$x." ";
} while($x++<10);
echo "\n";

for ($y = 0; $y<10;$y++){
    echo "y".$y." ";
}

foreach ($_SERVER as $item => $value){
    echo $item." =>".$value."<br>";
}