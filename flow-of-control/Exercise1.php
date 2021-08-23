<?php

$firstNumber = (int) readline( "Input the 1st number: ");

$secondNumber = (int) readline( "Input the 2nd number: ");

$thirdNumber = (int) readline( "Input the 3rd number: ");

//todo print the largest number

$numbers = [$firstNumber, $secondNumber, $thirdNumber];

echo max($numbers);