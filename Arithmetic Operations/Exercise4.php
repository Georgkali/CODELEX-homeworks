<?php

// Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.


$x = (int) readline("Enter an integer: ");
$y = 1;

for ($i = 0; $i < $x; $i++) {
    $y = $y * ($i + 1);
}

echo $y;