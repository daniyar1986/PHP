<?php

$name[0]="Danik";
$name[1]="Dauren";
$name[2]="Estai";

for ($i = 0; $i<count($name);$i++){
    echo $name[$i]." ";
}

$name["Myrzakanov"]="Danik";
$name["Argimov"]="Dauren";
$name["Eleup"]="Estai";

echo $name["Myrzakanov"];

define("massiv",
["myrzakanov"=>["name"=>"Daniyar","born"=>"1986"]]);

echo massiv["myrzakanov"]["name"];

$number = count($name);
echo $number;

$first = array("first","second");
$second =  array("dog","cat");
$all = $first + $second;

echo "\n";
$birth = [
    "Danik"=>1986,
    "Estai"=>1987
];

foreach ($birth as $key=>$value){
    echo "$key родился $value году\n";
}