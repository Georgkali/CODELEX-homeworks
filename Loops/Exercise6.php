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

//  //// //// \\\\ \\\\
//  //// **** **** \\\\
//  **** **** ****  ****

// //// //// //// //// //// //// \\\\\\\\\\\\\\\\\\\\\\\\
// ////////////////////********\\\\\\\\\\\\\\\\\\\\
// ////////////////****************\\\\\\\\\\\\\\\\
// ////////////************************\\\\\\\\\\\\
// ////////********************************\\\\\\\\
// ////****************************************\\\\
// **** **** **** **** **** ****         **** **** **** **** **** ****

class AsciiFigure {
    public $leftPixel = "////";
    public $rightPixel = "\\\\\\\\";
    public $starPixel = "****";
    public $stages = 5;

    public function drawTopline(){
        for ($i = 0; $i < ($this->stages - 1); $i++) {
            echo $this->leftPixel;
        }
        for ($i = 0; $i < ($this->stages - 1); $i++) {
            echo $this->rightPixel;
        }
        echo "\n";
    }

    public function drawSecondLine() {
        for ($i = 0; $i < ($this->stages - 1); $i++) {

        }
        for ($i = 0; $i < ($this->stages - 1); $i++) {
            echo $this->rightPixel;
        }
        echo "\n";

    }

    public function drawBaseLine(){
        for ($i = 0; $i < ($this->stages - 1)*2; $i++) {
            echo $this->starPixel;
        }
        echo "\n";
    }
}

$asciiFigure = new AsciiFigure;
$asciiFigure->drawTopline();
$asciiFigure->drawSecondLine();
$asciiFigure->drawBaseLine();
