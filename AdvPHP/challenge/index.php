<?php
//
//for ($i=0; $i<1001; $i++) {
//    echo $i . "<br>";
//}
//
//for ($j=1000; $j>-1; $j--) {
//    echo $j . "<br>";
//}

print implode("<br>", range(0, 1000));echo'<br>';print implode("<br>", range(999, 0));

//echo implode(' ',range(1, 1000));
//
////
////array_map(function ($value) {
////    echo "$value<br />";
////}, range(1, 1000));