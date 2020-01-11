<?php


class Car
{
    private $color;
    private $price;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Car constructor.
     * @param $color
     * @param $price
     */
    public function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
    }

    function getInfo(){
        return "{$this->color} {$this->price}";
    }

}

$car = new Car("blue", 1500);
echo $car->getInfo();