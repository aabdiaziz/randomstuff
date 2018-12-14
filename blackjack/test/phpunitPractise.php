<?php

require('../phpunitPractise.php');

use PHPUnit\Framework\TestCase;

class phpunitPractise extends TestCase{
    public $mainArray = [
        "first"=>[1,2,3,4,5,6],
        "second"=>[1,2,3,4,5,6],
        "third"=>[1,2,3,4,5,6],
        "fourth"=>[1,2,3,4,5,6],
    ];

    //Success
    public function testgetRandomKeysSuccess(){
        $expected = "fourth";
        $testArray = ["fourth"=>[1,2,3,4,5,6]];
        $case = RandomKey($testArray);
        $this->assertEquals($case, $expected);
    }

    //failure
    public function testsgetRandomKeysFailEmptyArray(){
        $expected = "";
        $testArray = [];
        $case = RandomKey($testArray);
        $this->assertEquals($case, $expected);
    }


}