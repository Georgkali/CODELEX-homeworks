<?php

// Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.
//
//  //// //// //// //// \\\\\\\\\\\\\\\\
//  ////////////********\\\\\\\\\\\\
//  ////////****************\\\\\\\\
//  ////************************\\\\
//  **** **** **** **** **** **** **** ****
//Then, modify your program using an integer class constant so that it can create a similar figure of any size.
// For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

// //// //// //// //// //// //// \\\\\\\\\\\\\\\\\\\\\\\\
// ////////////////////********\\\\\\\\\\\\\\\\\\\\
// ////////////////****************\\\\\\\\\\\\\\\\
// ////////////************************\\\\\\\\\\\\
// ////////********************************\\\\\\\\
// ////****************************************\\\\
// **** **** **** **** **** ****         **** **** **** **** **** ****

class AsciiFigure{
    public $leftPixel = "////";
    public $rightPixel = "\\\\\\\\";
    public $starPixel = "****";
    public $stages = 5;

    public function drawLeftSide($i){
        for ($e = 1; $e < $this->stages; $e++) {
                if ($e < $this->stages - $i) {
                    echo $this->leftPixel;
                } else {
                    echo $this->starPixel;
                }
            }
    }

    public function drawRightSide($i) {
        for ($e = 1; $e < $this->stages; $e++) {
                if ($e < 1 + $i) {
                    echo $this->starPixel;
                } else {

                    echo $this->rightPixel;
                }
            }
    }

    public function drawPyramid() {
        for ($i = 0; $i < $this->stages ; $i++) {
            $this->drawLeftSide($i);
            $this->drawRightSide($i);
            echo "\n";
        }
    }
}


$asciiFigure = new AsciiFigure;
$asciiFigure->stages = 7;
$asciiFigure->drawPyramid();

