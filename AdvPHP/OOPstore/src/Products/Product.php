<?php

namespace ValhallaStore\Products;

class Product
{
    public $name;
    public $type;
    public $size;
    public $price;


    /**
     * Food constructor.
     *
     * @param string $name
     * @param string $type
     * @param string $size
     * @param int $price
     */
    public function __construct(string $name, string $type, string $size, int $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->size = $size;
        $this->price = $price;
    }


    public function __toString()
    {
        return "New Drink Ordered:  ".[$this->name, $this->type, $this->size, $this->price];
    }


}