<?php

$string1 = "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";


$string = "Hello world & good morning. The date is 18.05.2016";

function getWordCount ($string) {
    $wordCount  = str_word_count($string, 0, "1234567890:@&_");
    return $wordCount;
}

echo getWordCount($string) . "<br>";

function getAverageWordLength($string) {
    $averageWordLength = strlen($string)/ str_word_count($string,0,"&[0-30].[0-9].[0-9999]");
    echo $averageWordLength;
}

getAverageWordLength($string);

//function str_word_count_utf8($str) {
//    return count(preg_split('~[^\p{L}\p{N}\']+~u',$str));
//}
//
//var_dump(str_word_count_utf8($string));
echo '<br>';
// break text to array of words

$words = str_word_count($string, 1, "1234567890:@&_");
var_dump($words);
// display text
echo $string, '<br><br>';

