<?php


class CloneExample
{
    private $name;
    private $city;
    private $id;

    /**
     * CloneExample constructor.
     * @param $name
     * @param $city
     */
    public function __construct($name, $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    function __clone()
    {
        $this->id = 0;
    }

    function __get($name)
    {
        // TODO: Implement __get() method.
    }
}

$cloneExample = new CloneExample("Danik","Almaty");
$cloneExample->setId(133);
var_dump($cloneExample);
$obj = clone $cloneExample;
var_dump($obj);

