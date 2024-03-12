<?php

/**
 * OOP - Object Oriented Programming
 */
class User
{
    protected $first_name;
    protected $last_name;
    protected $birth_date;
    protected $address;
    protected $phone;
    protected $email;
    protected $password;
    protected $gender;

    // Constructor to initialize properties
    public function __construct(
        $first_name,
        $last_name,
        $birth_date,
        $address,
        $phone,
        $email,
        $password,
        $gender
    ) {
        $this->setFirst_name($first_name);
        $this->last_name = $last_name;
        $this->birth_date = $birth_date;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->setPassword($password);
        $this->gender = $gender;
    }

    public function sayHello(): string
    {
        return 'Hello, ' . $this->first_name . '!';
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
        // Validate first name
        if (empty($first_name)) {
            throw new InvalidArgumentException('First name cannot be empty.');
        }
        if (strlen($first_name) < 5) {
            throw new InvalidArgumentException('First name must be at least 5 characters long.');
        }
        if (strlen($first_name) > 255) {
            throw new InvalidArgumentException('First name cannot exceed 255 characters.');
        }

        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Set the password (consider hashing)
     */
    public function setPassword($password)
    {
        // Implement password validation here if necessary
        if (strlen($password) < 8) {
            throw new InvalidArgumentException('Password must be at least 8 characters long.');
        }

        $this->password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    }
}

// Example usage
// try {
//     $user = new User(
//         'Sara',
//         'Smith',
//         '1990-01-01',
//         '123 Main St, City',
//         '1234567890',
//         'sara@example.com',
//         'mypassword',
//         'female'
//     );

//     echo $user->sayHello();
// } catch (InvalidArgumentException $e) {
//     echo 'Error: ' . $e->getMessage();
// }

/**
 * Encapsulation
 * - Encapsulation is the practice of bundling data (variables) and methods (functions) that operate on the data within an object.
 * Encapsulation is the practice of bundling data (variables) and methods (functions) that operate on the data within an object.
 * You restrict access to certain components of the object, typically by making properties or methods private or protected, and only allowing controlled access through public methods (getters and setters).
 */