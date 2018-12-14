<?php

$hipster = "Lorem ipsum dolor amet poke mixtape cold-pressed, keytar XOXO sriracha venmo messenger bag kitsch trust fund street art. Mixtape semiotics church-key, 90's lyft taiyaki la croix squid fingerstache artisan. Tattooed snackwave heirloom venmo mixtape dreamcatcher. Taxidermy brunch pop-up kogi vice, blog williamsburg quinoa vape hella. Sriracha forage pug PBR&B, kale chips before they sold out narwhal affogato you probably haven't heard of them leggings austin photo booth cornhole. Edison bulb franzen tacos kinfolk farm-to-table 8-bit.

Deep v skateboard occupy put a bird on it, you probably haven't heard of them disrupt blue bottle. Kale chips heirloom woke, dreamcatcher squid next level venmo 90's brunch semiotics ugh. Umami ramps pop-up synth wolf you probably haven't heard of them. Etsy pinterest swag vegan vice hot chicken. Swag poutine cred, organic street art direct trade bicycle rights vegan artisan af. Tumeric bitters pop-up tumblr.

Woke la croix kogi YOLO pork belly kitsch, actually brunch fam. Sustainable taxidermy XOXO thundercats. Live-edge before they sold out wolf sartorial distillery gentrify offal asymmetrical selfies church-key synth narwhal. Polaroid gastropub selfies, truffaut before they sold out you probably haven't heard of them church-key cardigan forage hoodie. Forage banh mi hot chicken green juice.";

//counts strings
function countHipster ($hipster) {
    echo nl2br("Analysis OF string \n\n $hipster \n\n" );
    echo nl2br("\n\nThe length of this string: " . strlen($hipster));
    echo nl2br("\n\nThe number of words in this string: " . str_word_count($hipster));
    echo nl2br("\n\nThe number of sentences in this string: " . substr_count($hipster, '.'));
    echo nl2br("\n\nThe number of sentences in this string: " . substr_count($hipster, '  '));
}

countHipster($hipster);


function makeSentences ($hipster) {
    $a = explode(".", $hipster);
    var_dump($a);
    return $a;
}

function doThing ($key, $a) {
    array_push($b, $a[$key]);
    echo $b;
}

doThing($a, $a);

//function HowManyParagraphs ($a) {
//    array_walk()
//    foreach ($a)
//}


howManyParagraphs($hipster);