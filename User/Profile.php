<?php

namespace User;

class Profile
{
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $gender;
    protected $age;

    protected static $user_type = 'User';

    public function __construct($id)
    {
        echo __CLASS__;
    }
}