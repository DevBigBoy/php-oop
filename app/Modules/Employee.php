<?php

require_once __DIR__ . '/User.php';

class Employee extends User
{

    const MALE = 'male';
    const FEMALE = 'female';
    private $id;
    private $ssn;
    private $department;
    private $position;
    private $salary;
    private $date_of_appointment;
    private $date_of_leaving;

    public static $campany_name = 'BigBoy';

    // Constructor to initialize both User and Employee properties
    public function __construct(
        $id,
        $ssn,
        $department,
        $position,
        $salary,
        $first_name,
        $last_name,
        $birth_date,
        $address,
        $phone,
        $email,
        $password,
        $gender
    ) {
        // Call parent constructor to initialize User properties
        parent::__construct(
            $first_name,
            $last_name,
            $birth_date,
            $address,
            $phone,
            $email,
            $password,
            $gender
        );

        // Initialize Employee-specific properties
        $this->id = $id;
        $this->ssn = $ssn;
        $this->department = $department;
        $this->position = $position;
        $this->salary = $salary;
        // Initialize any other Employee-specific properties as needed
    }

    // Getter methods for Employee properties (optional)
    public function getId()
    {
        return $this->id;
    }

    public function getSsn()
    {
        return $this->ssn;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    // Additional methods specific to Employee can be added here
}