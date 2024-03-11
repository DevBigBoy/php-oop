<?php

/**
 * OOP - Object Oriented Programing
 */
class User
{
    private $first_name;
    private $last_name;
    private $birth_date;
    private $address;
    private $phone;
    private $email;
    private $gender;
    private $salary;


    public function __construct($name)
    {
        $this->first_name = $name;
    }
    public function sayHello(): string
    {
        return 'hello world ' . $this->first_name;
    }

    /**
     * Get the value of first_name
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */
    public function setFirst_name($first_name)
    {
        // check if the property null, greater than 255, min 5

        $this->first_name = $first_name;

        return $this;
    }
}

$user = new User('sara');

// $user->password = '123456789'; Deprecated: Creation of dynamic property

// echo $user->sayHello();

var_dump($user);

/**
 * Encapsulation
 * - Encapsulation is the practice of bundling data (variables) and methods (functions) that operate on the data within an object.
 */