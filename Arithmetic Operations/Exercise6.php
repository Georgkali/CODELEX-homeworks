<?php

// Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
// The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5,
// "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on. The output shall look like:
//
//1 2 Coza 4 Loza Coza Woza 8 Coza Loza 11
//Coza 13 Woza CozaLoza 16 17 Coza 19 Loza CozaWoza 22
//23 Coza Loza 26 Coza Woza 29 CozaLoza 31 32 Coza

function cozaLozaWoza(int $int) {
    if($int % 3 == 0 && $int % 5 == 0) {
        return "CozaLoza";
    } elseif ($int % 3 == 0 && $int % 7 == 0) {
        return "CozaWoza";
    } elseif ($int % 5 == 0 && $int % 7 == 0) {
        return "LozaWoza";
    } elseif ($int % 3 == 0) {
    return "Coza";
    } elseif ($int % 5 == 0) {
        return "Loza";
    } elseif ($int % 7 == 0) {
        return "Woza";
    }
    else {return $int;}
}

$t = 0;
for ($i = 1; $i < 111; $i++) {

    if ($t < 10) {
        echo cozaLozaWoza($i) . " ";
        $t++;
    } else {
        echo cozaLozaWoza($i) . "\n";
        $t = 0;}
}