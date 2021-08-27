<?php

 $leftPixel = "////";
 $rightPixel = "\\\\\\\\";
 $starPixel = "****";
 $stages = 5;
/*
 for ($e = 0; $e < $stages ; $e++) {



    for ($i = 0; $i < $stages - 1; $i++) {

    echo $leftPixel;
    echo $i;

    }
    for ($i = 0; $i < $stages - 1; $i++) {
    echo $rightPixel;
    echo $i;
    }
    echo $e . " \n";
}
*/
$i = 0;
$resultPixel = "////////////////";
$pixels = str_split($resultPixel);

for ($e = 0; $e < $stages ; $e++) {

    $pixels = array_splice($pixels, 5, 30, ["*"]);

    var_dump($pixels);




    echo "\n";
}



