<?php

// On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

$input = (string) readline("Enter your text: ");

$alphabet = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
    ['m', 'n', 'o'],
    ['p', 'q', 'r', 's'],
    ['t', 'u', 'v'],
    ['w', 'x', 'y', 'z']
];

$inputArr = str_split($input);

for($i = 0; $i < count($inputArr); $i++) {
    for ($e = 0; $e < count($alphabet); $e++) {
        if (in_array($inputArr[$i], $alphabet[$e])) {

            echo  array_search($alphabet[$e], $alphabet)+2 . "(" . (array_search($inputArr[$i], $alphabet[$e])+1) . ")" . "\n";
        }
    }
}