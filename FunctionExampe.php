<?php

function sqrExample($n){
    return $n * $n;
}

function countInc(){
    static $count = 0;
    $count++;
    echo $count;
}

for ($i = 0; $i<5; $i++)
    countInc();

echo sqrExample(5);
echo countInc();
