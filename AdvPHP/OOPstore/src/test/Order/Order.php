<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../../vendor/autoload.php';



class Order extends TestCase
{

    public function testAddToOrderSuccess ()
    {
        $product = $this->createMock(\ValhallaStore\Products\Product::class);
        $product2 = $this->createMock(\ValhallaStore\Products\Product::class);
        $order = new \ValhallaStore\Order\Order($product);
        $order->addToOrder($product2);
        $result = $order->getBasket();
        $this->assertEquals($result, [$product, $product2]);
    }


    public function testAddToOrder()
    {
        $product = $this->createMock(\ValhallaStore\Products\Product::class);
        $order = new \ValhallaStore\Order\Order($product);
        $order->addToOrder($product2);
        $result = $order->getBasket();
        $this->assertEquals($result, [$product, $product2]);
    }

}