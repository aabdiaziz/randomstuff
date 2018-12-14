<?php

abstract class Animal {
    public function eatFood(){
        echo "i'm eating food";
    }
}

interface eat  {
    public function eatFood();
}

class pig extends Animal implements eat {
    public function eatFood()
    {

    }
}

$pig = new pig();
$pig->eatFood();