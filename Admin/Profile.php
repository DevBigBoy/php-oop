<?php

namespace Admin;

use User\Profile as ProfileUser;

/**
 * A namespace in PHP is a way to encapsulate items such as classes, interfaces, functions, and constants to prevent naming conflicts.
 * Namespaces allow you to group related code under a unique name, making it easier to organize and avoid conflicts with similarly named items in other parts of the application or in external libraries.
 * 
 */

/**
 * Inheritance
 * Inheritance allows a class (child class) to inherit properties and methods from another class (parent class).
 * This helps avoid code duplication and creates a clear hierarchy between classes.
 */
class Profile extends ProfileUser
{
    public $testimonials;
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $gender;
    protected $age;


    protected static $user_type = 'Admin';

    public function __construct($id)
    {
        echo __CLASS__;
    }


    public function sayHello() {}
}