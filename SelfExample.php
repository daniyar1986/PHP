<?php


class SelfExample
{
    private static $name;

    /**
     * @param mixed $name
     */
    public static function setName($name1)
    {
        self::$name = $name1;
    }

    /**
     * @return mixed
     */
    public static function getName()
    {
        return self::$name;
    }

}

SelfExample::setName("Danik");
echo SelfExample::getName();