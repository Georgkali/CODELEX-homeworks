<?php

// Write a program to produce the sum of 1, 2, 3, 4, 5 ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//
//  The sum of 1 to 100 is 5050
//  The average is 50.5


$x1 = (int) readline('Enter a lower bound: ');
$y1 = (int) readline('Enter an upper bound: ');

function sum(int $x, int $y): int
{
    $i = $x;
    $z = 1;
    while ($i < $y) {
        $x = $x + ($i + 1);
        $z++;
        $i++;
    }

    return $x;
}


    echo "Sum is: " . sum($x1, $y1) . "\n";
    echo  "Average is " . ($y1 - (($y1-$x1)/2)) . "\n";


// 4, 5, 6, 7

//20 30