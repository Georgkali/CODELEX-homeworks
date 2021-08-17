<?php

//Imagine you own a gun store. Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array.
// Each gun has license letter, price & name. Using PHP in-built functions determine if the requester (person) can buy a gun from the store.

$person = new stdClass();
$person->name = "John";
$person->license = ['M'];
$person->cash = 700;

$gun1 = new stdClass();
$gun1->name = 'AK47';
$gun1->license = 'A';
$gun1->price = 500;

$gun2 = new stdClass();
$gun2->name = 'TT';
$gun2->license = 'M';
$gun2->price = 250;

$gun3 = new stdClass();
$gun3->name = 'Izh';
$gun3->license = 'M';
$gun3->price = 100;

$guns = [$gun1, $gun2, $gun3];

function canHeBuy(stdClass $person, stdClass $gun): bool {
    return $person->cash >= $gun->price;
}
function gotHeLicense(stdClass $person, stdClass $gun): bool {
  return in_array($gun->license, $person->license);
}


foreach ($guns as $gun) {
    if(canHeBuy($person, $gun) && gotHeLicense($person, $gun)) {
        echo $person->name . " can buy " . $gun->name . "\n";
    } else {echo $person->name . " can't buy " . $gun->name . "\n";}
}




