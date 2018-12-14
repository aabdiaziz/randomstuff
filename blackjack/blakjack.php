<?php
/*
 * multiply's a number by itself and adds another number
 *
 * @param $a int integer input which is multiplied by itself
 * @param $b int integer input which is added to the result of the above parameter
 *
 * @return $results int returns the results of the whole mathematical operation
*/



    $suits = [
        'spades' => ['two'=> 2, 'three'=> 3, 'four'=> 4, 'five'=> 5, 'six'=> 6, 'seven'=> 7, 'eight'=> 8, 'nine'=> 9, 'ten'=> 10, 'jack'=>10, 'queen'=> 10, 'king'=> 10, 'ace'=>11],
        'hearts' => ['two'=> 2, 'three'=> 3, 'four'=> 4, 'five'=> 5, 'six'=> 6, 'seven'=> 7, 'eight'=> 8, 'nine'=> 9, 'ten'=> 10, 'jack'=>10, 'queen'=> 10, 'king'=> 10, 'ace'=>11],
        'clubs' => ['two'=> 2, 'three'=> 3, 'four'=> 4, 'five'=> 5, 'six'=> 6, 'seven'=> 7, 'eight'=> 8, 'nine'=> 9, 'ten'=> 10, 'jack'=>10, 'queen'=> 10, 'king'=> 10, 'ace'=>11],
        'diamonds' => ['two'=> 2, 'three'=> 3, 'four'=> 4, 'five'=> 5, 'six'=> 6, 'seven'=> 7, 'eight'=> 8, 'nine'=> 9, 'ten'=> 10, 'jack'=>10, 'queen'=> 10, 'king'=> 10, 'ace'=>11]
    ];


    /*
     * This Function shuffles 'faces' array and unsets it for the second card pick.
     *
     * @param $suits array is the array of suits required as an input.
     * @param $faces array is the array where the cards face's are stored and also the value they carry.
     *
     * @return int I would like this to return '$Results' but I don't know how.
     *
     */

function PLayer1 ($suits) {
    $firstSuit = array_rand($suits);
    $firstFace =  array_rand($suits[$firstSuit]);
    $card1 =  $firstFace . $firstSuit;
    echo $card1;
    $score1 = $suits[$firstSuit][$firstFace];
    unset($suits[$firstSuit][$firstFace]);
    echo '<br>';

    $secondSuit = array_rand($suits);
    $secondFace =  array_rand($suits[$firstSuit]);
    $card2 =  $secondFace . $secondSuit;
    echo $card2;
    $score2 = $suits[$secondSuit][$secondFace];

    $scoreTotal = $score1 + $score2;
    echo '<br>' . $scoreTotal;

    if ($card1 === $card2) {
        echo 'Program is broken run for your life!';
    } else {
        return $suits;
    }

    if ($scoreTotal > 21){
        echo 'you have gone bust';
    }

    if ($firstFace & $secondFace === 'ace'){
        $scoreTotal = 21;
    }
}

$newDeck = PLayer1($suits);

function Dealer ($newDeck){
    $firstSuit = array_rand($newDeck);
    $firstFace =  array_rand($newDeck[$firstSuit]);
    $card1 =  $firstFace . $firstSuit;
    echo '<br>';
    echo $card1;
    $score1 = $newDeck[$firstSuit][$firstFace];
    unset($newDeck[$firstSuit][$firstFace]);
    echo '<br>';

    $secondSuit = array_rand($newDeck);
    $secondFace =  array_rand($newDeck[$firstSuit]);
    $card2 =  $secondFace . $secondSuit;
    echo $card2;
    $score2 = $newDeck[$secondSuit][$secondFace];

    $scoreTotal = $score1 + $score2;
    echo '<br>' . $scoreTotal;

}

Dealer($newDeck);

function whoWon(){

}





