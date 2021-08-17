<?php

//Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 16;

function validate(stdClass $obj): string {
      if($obj->age >= 18) {
          $result = $obj->name . " is adult";
      } else {
          $result = $obj->name .  " is not adult";
      }
          return $result;

}

echo validate($person);