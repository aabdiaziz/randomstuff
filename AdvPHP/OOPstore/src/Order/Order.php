<?php


namespace ValhallaStore\Order;
use ValhallaStore\Products\Product;

class Order
{
    public $basket = [];


    public function __construct(Product $product)
    {
        $this->basket[] = $product;
    }

    public function addToOrder(Product $food)
    {
        $this->basket[]= $food;
    }

    public function getBasket()
    {
        return $this->basket;
    }

}

