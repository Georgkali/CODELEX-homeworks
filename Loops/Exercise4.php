<?php

//Write a console program in a class named FizzBuzz that prompts the user for an integer, then prints all of the numbers from one to that integer, separated by spaces.
//
//Use a loop to print the numbers.
//
//But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".
//
//For numbers which are multiples of both three and five print "FizzBuzz".
//
//Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:

// 1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz
//Fizz 22 23 Fizz Buzz 26 Fizz 28 29 FizzBuzz 31 32 Fizz 34 Buzz Fizz 37 38 Fizz Buzz
//41 Fizz 43 44 FizzBuzz 46 47 Fizz 49 Buzz Fizz 52 53 Fizz Buzz 56 Fizz 58 59 FizzBuzz
//61 62 Fizz 64 Buzz Fizz 67 68 Fizz Buzz 71 Fizz 73 74 FizzBuzz 76 77 Fizz 79 Buzz
//Fizz 82 83 Fizz Buzz 86 Fizz 88 89 FizzBuzz 91 92 Fizz 94 Buzz Fizz 97 98 Fizz Buzz

class FizzBuzz {
    public $space = " ";
    public function numbers() {
       $max = (int) readline("Enter an integer: ");
        for ($i = 1; $i <= $max; $i++) {
            if($i % 20 == 0) {$this->space = "\n";} else {$this->space = " ";}
            if($i % 3 == 0) {echo 'Fizz' . $this->space;}
            elseif($i % 5 == 0) {echo 'Buzz' . $this->space;}
            elseif($i % 3 == 0 && $i % 5 == 0) {echo 'FizzBuzz' . $this->space;}
            else
            {echo $i . $this->space;}
        }
    }

}
$fizzBuzz = new FizzBuzz;
$fizzBuzz->numbers();