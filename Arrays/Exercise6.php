<?php

// Write a program to play a word-guessing game like Hangman.
//
//It must randomly choose a word from a list of words.
//It must stop when all the letters are guessed.
//It must give them limited tries and stop after they run out.
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).

$words = [
    "Apocalyptic",
    "Equilibrium",
    "Mitigate",
    "Bamboozled",
    "Exquisite",
    "Nefarious",
    "Bizarre",
    "Flippant",
    "Onomatopoeia",
    "Blasphemy",
    "Gerrymandering",
    "Persnickety"
];

$secretWord = strtolower($words[rand(0, count($words) - 1)]);
$secretWordArray =  str_split($secretWord);

$maskedWord = [];
$incorrectGuesses = [];
$wordMasking = function () use (&$maskedWord, $secretWordArray): array {
    for ($i = 0; $i < count($secretWordArray); $i++) {
        array_push($maskedWord, '_');
    }
    return $maskedWord;
};

$wordMasking();

echo implode($maskedWord) . "\n";
echo "You have " . 10 . " tries!" . "\n";
$i = 0;
while ($i < 10) {
    $input = readline("Enter your guess: ");
    foreach ($secretWordArray as $item => $value) {
        if ($input == $value) {
            array_splice($maskedWord, $item, 1, [$value]);
        }
    }
    if(!in_array($input, $secretWordArray)) {
        array_push($incorrectGuesses, $input . " ");
    }

    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . "\n";

    echo implode($maskedWord) . "\n";

    echo implode($incorrectGuesses) . "\n";

    echo "You have " . (9 - $i) . " tries!" . "\n";
    $i++;
    var_dump($i);
    if($i == 10) {
        $restart = readline("Restart y/n? ");
        if($restart == 'y') {
            $i = 0;
        } else {$i = 10;}
    }
}
