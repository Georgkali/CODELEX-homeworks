<?php

// Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

$john = new stdClass();
$john->name = "John";
$john->surname = "Doe";
$john->age = 12;

$peter = new stdClass();
$peter->name = "Peter";
$peter->surname = "Doe";
$peter->age = 19;

$does = [$john, $peter];

function validate(stdClass $obj): string {
    if($obj->age >= 18) {
        $result = $obj->name . " is adult";
    } else {
        $result = $obj->name . " is not adult";
    }
    return $result;
}

foreach ($does as $doe) {
    echo validate($doe) . "\n";
}






