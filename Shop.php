<?php


class Shop
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        $this->name = "Adidas";
        echo $this->name;
    }
}

$product = new Shop();
$product->getName();
