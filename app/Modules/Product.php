<?php

namespace App\Modules;

class Product
{
    private $id;
    private $name;
    private $price;
    private $discount;

    private $image;

    /**
     * a constructor is a special function that is automatically called when an object of a class is created. Its main purpose is to initialize the object, often by assigning values to the object’s properties when it's instantiated. Constructors provide a convenient way to set up an object with the necessary data at the moment of its creation.
     */

    public function __construct(string  $name, int $price, int $discount)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDiscount($discount);
    }




    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}