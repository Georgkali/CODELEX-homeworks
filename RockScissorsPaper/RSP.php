<?php

$options = [
    "rock",
    "scissors",
    "paper"
];

$choice = (int) readline("Choose your option: \n 1 -> rock \n 2 -> scissors \n 3 -> paper \n");
if($choice < 1 || $choice > 3) {
    echo "Invalid input, try again! \n";
    $choice = (int) readline("Choose your option: \n 1 -> rock \n 2 -> scissors \n 3 -> paper \n");
}
$playerChoice = $options[$choice - 1];
$computerChoice = $options[rand(0, 2)];
echo "Player: " . $playerChoice . "\n";
echo "Computer: " . $computerChoice . "\n";

if($playerChoice == $computerChoice) echo "Tie!";

if($playerChoice == $options[0] && $computerChoice == $options[1]) echo "Player win!";
if($playerChoice == $options[1] && $computerChoice == $options[2]) echo "Player win!";
if($playerChoice == $options[2] && $computerChoice == $options[0]) echo "Player win!";

if($playerChoice == $options[0] && $computerChoice == $options[2]) echo "Computer win!";
if($playerChoice == $options[1] && $computerChoice == $options[0]) echo "Computer win!";
if($playerChoice == $options[2] && $computerChoice == $options[1]) echo "Computer win!";