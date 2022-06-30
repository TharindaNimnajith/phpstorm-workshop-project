<?php

namespace Navigation1\JetBrains\Customers;


class Customer
{
    /** @var string */
    protected $_name;

    /** @var int */
    protected $_age;

    /**
     * @param string $name
     * @param int $age
     */
    function __construct($name, $age)
    {
        $this->_age = $age;
        $this->_name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Celebrate birthday.
     */
    public function celebrateBirthday()
    {
        echo 'Yay!';
    }
}
