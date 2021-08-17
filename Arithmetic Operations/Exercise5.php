<?php

// Write a program that picks a random number from 1-100. Give the user a chance to guess it.
// If they get it right, tell them so. If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)


$x = rand(0, 100);

$guess = (int) readline("I'm thinking of a number between 1-100.  Try to guess it: ");

if($guess == $x) {echo "You guessed it!  What are the odds?!?";
exit;} elseif ($guess < $x) {
    echo "Sorry, you are too low.  I was thinking of " . $x;
    exit;
} elseif ($guess > $x) {
    echo "Sorry, you are too high.  I was thinking of " . $x;
    exit;
}
