<?php


class CloneExample
{
    function __clone()
    {
        echo "Cloned";
    }
}

$cloneExample = new CloneExample();

$obj = clone $cloneExample;

