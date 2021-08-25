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
$rand = rand(0, 2);
$computerChoice = $options[$rand];
echo "Player: " . ($choice) . " -> " . $playerChoice . "\n";
echo "Computer: " . ($rand + 1) . " -> " . $computerChoice . "\n";

if($playerChoice == $computerChoice) echo "Tie!";

if($playerChoice == $options[0] && $computerChoice == $options[1]) echo "Player wins!";
if($playerChoice == $options[1] && $computerChoice == $options[2]) echo "Player wins!";
if($playerChoice == $options[2] && $computerChoice == $options[0]) echo "Player wins!";

if($playerChoice == $options[0] && $computerChoice == $options[2]) echo "Computer wins!";
if($playerChoice == $options[1] && $computerChoice == $options[0]) echo "Computer wins!";
if($playerChoice == $options[2] && $computerChoice == $options[1]) echo "Computer wins!";