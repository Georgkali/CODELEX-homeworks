<?php

// complete loop to multiply i with itself n times,
// it is NOT allowed to use built-in pow() function

function myPow($base, $power)
{
    $m = $base;
    for ($e = 1; $e <= $power-1; $e++) {
        $m = $m * $base;
    }
    echo $m . "\n";
}


myPow(2, 8);

echo pow( 2, 8) . "\n"; // checking