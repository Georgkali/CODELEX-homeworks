<?php

//

class Geometry {
   static function circleA(float $r) {
       if($r < 0) return "invalid input";

    return M_PI * ($r * $r);
    }
    static function rectangleA(float $l, float $w) {
        if($l < 0 || $w < 0) {
            return "invalid input";
        } else {
       return $l * $w;}
    }
    static function triangleA(float $b, float $h) {
        if($b < 0 || $h < 0) return "invalid input";
       return $b * $h * 0.5;
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle \n";
echo "2. Calculate the Area of a Rectangle \n";
echo "3. Calculate the Area of a Triangle \n";
echo "4. Quit\n";

$selection = (int) readline("Enter your choice (1-4) : ");

if ($selection < 1 || $selection > 4) {
    echo "Invalid input!";
    } elseif ($selection == 1) {
    $radius = (float) readline("Enter circle radius(cm): ");
    echo number_format(Geometry::circleA($radius), 2) . " cm2";
    } elseif ($selection == 2) {
    $length = (float) readline("Enter length of rectangle(cm): ");
    $width = (float) readline("Enter width of rectangle(cm): ");
    echo number_format(Geometry::rectangleA($length, $width), 2) . " cm2";
    } elseif ($selection == 3) {
    $base = (float) readline("Enter base of triangle(cm) : ");
    $height = (float) readline("Enter height of triangle(cm) :");
    echo number_format(Geometry::triangleA($base, $height), 2) . "cm2";
    } else {
    echo "Good bye!";
    exit;}
