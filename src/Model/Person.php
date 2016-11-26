<?php

namespace Santa\Testuals\Example\Model;

class Person
{
    /** @var string */
    private $name;

    /** @var int */
    private $age;

    /**
     * @param string $name
     * @param int    $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
}