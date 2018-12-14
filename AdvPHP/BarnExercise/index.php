<?php

namespace farms\farm1;


class Barn {
    public $lives;
    public function setLivesIn($livesIN) {
        $this->lives = $livesIN;
    }

//    public function __toString($lives)
//    {
//        return "hello";
//    }
}

class Barn2 {
    public $lives;
    public function setLivesIn($livesIN) {
        $this->lives = $livesIN;

    }
}


$jaguar = new Barn();
$jaguar->setLivesIn('barn1');


$dolphin = new Barn;
$dolphin->setLivesIn('barn1');

$rat = new Barn;
$rat->setLivesIn('barn1');

$jaguar = new Barn2;
$jaguar->setLivesIn('barn2');

$chicken = new Barn2;
$chicken->setLivesIn('barn2');

$goat = new Barn2;
$goat->setLivesIn('barn2');

var_dump($jaguar, $dolphin, $rat, $chicken, $goat);







