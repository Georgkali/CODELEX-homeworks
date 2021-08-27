<?php

// Write a console program in a class named RollTwoDice that prompts the user for a desired sum,
// then repeatedly rolls two six-sided dice (using a Random object to generate random numbers from 1-6)
// until the sum of the two dice values is the desired sum.
// Here is the expected dialogue with the user:

class RollTwoDice {


    public $result = 0;
    public function roll() {

                $input = (int)readline("Enter a number (2 - 12): ");
        if ($input < 2 || $input > 12) {
            exit();
        }
        while ($this->result !== $input) {

            $x = rand(1,6);
            $y = rand(1,6);
            $this->result = $x + $y;
            echo $x . " and " . $y . " = " . $this->result . PHP_EOL;
        }
    }

}

$rollTwoDice = new RollTwoDice;
echo $rollTwoDice->roll();