<?php

// Write a program that asks the user to enter two words.
// The program then prints out both words on one line.
// The words will be separated by enough dots so that the total line length is 30:

$word1 = (string) readline("Type the first word: ");
$word2 = (string) readline("Type the second word: ");
$dot = ".";
$oneLine = $word1 . $word2;
while (strlen($oneLine) < 30) {
    $oneLine = substr_replace($oneLine, $dot, strlen($word1), 0);
}
echo $oneLine . PHP_EOL;
