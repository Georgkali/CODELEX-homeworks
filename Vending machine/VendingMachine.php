<?php

$machineCoins = [
    5,
    10,
    20,
    50,
    100
];
function makeCoin(int $value,int $qty): stdClass {
    $coin = new stdClass();
    $coin->value = $value;
    $coin->qty = $qty;
    return $coin;
}
$wallet = [
    makeCoin(5,3),
    makeCoin(10,3),
    makeCoin(20,3),
    makeCoin(50,3),
    makeCoin(100,3),
];
function makeDrink ( $name, $price):stdClass {
    $drink = new stdClass();
    $drink->name = $name;
    $drink->price = $price;
    return $drink;
}

$drinks = [
    makeDrink("Cappuccino", 125),
    makeDrink("Latte", 145),
    makeDrink("Tea", 105)
];
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n \n";
echo "Welcome! \nDrinks: \n \n";
// --------------------------- drink selection
foreach ($drinks as $key=>$drink) {
    echo  $key+1 . " | $drink->name | $drink->price \n";
}
$choice = (int) readline("Choose you drink: \n \n");

while(!array_key_exists($choice-1,$drinks)) {
    echo "Invalid input! Try again: \n \n";

    foreach ($drinks as $key=>$drink) {
        echo  $key+1 . " | $drink->name | $drink->price \n";
    }
    $choice = (int) readline("Choose you drink: \n");
}
//---------------------------- payment
$selectedDrink = $drinks[$choice-1];
echo "Your choice is $selectedDrink->name \nPlease pay: " . ($selectedDrink->price/100) . "$ \n";
$payment = 0;

while($payment < $selectedDrink->price) {
    echo "Choose coin: \n";
    foreach (  $wallet as $key=>$coin) {
        echo $key+1 . " -> " . $coin->value/100 . "$  ($coin->qty) | ";
    }
    echo "\n";
    $selectedCoin = (int)readline("Coin:");

    while(!array_key_exists($selectedCoin-1, $wallet) || $wallet[$selectedCoin-1]->qty == 0) {
        echo "Invalid input! Try again: \n";
        foreach (  $wallet as $key=>$coin) {
            echo $key+1 . " -> " . $coin->value/100 . "$  ($coin->qty) | ";
        }
        echo "\n";
        $selectedCoin = (int) readline("Coin: \n");

        }

    $payment += $wallet[$selectedCoin-1]->value;
    $wallet[$selectedCoin-1]->qty -= 1;

    echo "to pay: " . ($selectedDrink->price - $payment)/100 . "$ \n";
}
if($payment == $selectedDrink->price) {
    echo "Please, take Your drink! \nThank You! \nGood bye! \n";
    exit();
}
//--------------------- change
if ($payment > $selectedDrink->price) {

    $change = $payment - $selectedDrink->price;
    echo "Change: " . $change/100 . "$\n";

    for($i = count($machineCoins)-1; $i >= 0; $i--) {
        if($machineCoins[$i] <= $change) {
            $change -= $machineCoins[$i];
            echo "Please, take " . $machineCoins[$i]/100 . "$ coin! \n";
            foreach ($wallet as $coin) {
                if($coin->value == ($machineCoins[$i])) {
                    $coin->qty += 1;
                }
            }
        }
    }
}
echo "Please, take Your drink! \nThank You! \nGood bye! \n";

foreach (  $wallet as $key=>$coin) {
    echo $key+1 . " -> " . $coin->value/100 . "$  ($coin->qty) | ";
}
