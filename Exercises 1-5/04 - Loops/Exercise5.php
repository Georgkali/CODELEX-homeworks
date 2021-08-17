<?php

//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.


    $john = new stdClass();
    $john->name = "John";
    $john->surname = "Doe";
    $john->age = 50;
    $john->birthday = "1st september 1971";

    $michael = new stdClass();
    $michael->name = "Michael";
    $michael->surname = "Douglas";
    $michael->age = 70;
    $michael->birthday = "17st october 1951";

 $persons = [$john, $michael];

 foreach ($persons as $person) {
     echo $person->name . " " . $person->surname . " " . $person->age . " " . $person->birthday . "\n";
 }









