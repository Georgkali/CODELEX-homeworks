<?php

// Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
// The player's goal is to accumulate as many points as possible without rolling a 1.
// Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
// Otherwise, they add this number to their running total score.
// The player then chooses whether to roll again, or end the game with their current point total.


class Piglet
{
    public $greeting = "Welcome to Piglet! \n";
    public $scores = 0;
    public $input = "y";

    public function round() {
        while ($this->input == "y") {
            $match = (int) rand(0, 10);
            echo "You rolled a " . $match . "\n";
            if ($match === 0) {
                echo "You lose!";
                exit();
            }
            $this->scores += $match;
            echo "You got " . $this->scores . " points." . "\n";
            $this->input = readline("Roll again(y/n)?: ");
            $this->quit();
        }
    }
    public function quit() {
        if($this->input == "n") {
            echo "You got " . $this->scores . " points. \n" ;
        }
    }
    public function game()
    {
        echo "Welcome to Piglet! \n";
        $this->round();
    }
}

$piglet = new Piglet;
$piglet->game();