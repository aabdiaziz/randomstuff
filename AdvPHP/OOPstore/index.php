<?php

require_once __DIR__ . '/vendor/autoload.php';




$cola = new ValhallaStore\Products\Product('Cola','fizzy','Large','2.00');
$mango = new ValhallaStore\Products\Product('Mango', 'fruit', 'Medium','3.00');
$kebab = new ValhallaStore\Products\Product( 'Lamb-Kebab', 'Kebab','Small','5.99');

$order1 = new ValhallaStore\Order\Order($cola);

var_dump($order1);

$order1->addToOrder($mango);

echo '<br>';

var_dump($order1);

//$avocadoDrink = new Food('Small',2.99);
//$cherryDrink = new Food('Small',2.99);