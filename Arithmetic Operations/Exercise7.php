<?php

// Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters.
// The formula in Math notation is:
$acceleration = -9.81;
$time = 10; // seconds
$initialVelocity = 0;
$initialPosition = 0;

$x = (0.5 * $acceleration * pow($time, 2) + $initialVelocity * $time + $initialPosition);

echo $x . "m";