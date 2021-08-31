<?php

function makeProduct(string $name, float $price, int $qty): stdClass {
    $product = new stdClass();

        $product->name  = $name;
        $product->price = $price;
        $product->qty = $qty;

        return $product;
}
$products = [
    makeProduct("coffee", 80, 100),
    makeProduct("chewing gum", 51, 100),
    makeProduct("ticket", 26, 100),
    makeProduct("sandwich", 220, 100),
];
$next = 'y';
$stop = 'n';
$basket = [];
$total =  0;

$customer = new stdClass();
$customer->name = "John";
$customer->wallet = 5;

echo "Welcome to our shop! $customer->name \n We have: \n";
foreach ($products as $key=>$value) {
    echo " -> $key  $value->name | price:" . $value->price/100 . "$ | available: $value->qty \n";
}

$checkOut = function () use (&$basket, &$total, &$customer) {
    echo "Your basket: \n";
    foreach ($basket as $item) {
        echo "$item->name ($item->qty): " . ($item->price * $item->qty)/100 ."$  \n";
         $total += ($item->price * $item->qty)/100;
    }
    echo "Total price: $total $ \n";
    if($total <= $customer->wallet) {
    echo "You got " . ($customer->wallet - $total) . "$ in your wallet.";} else {echo "Sorry, You dont have enough money!";}
    exit();
};

$shopping = function () use ($checkOut, &$products, &$basket, &$next, $stop)
{
    $selection = (int)readline("Select product: \n");
    if (!isset($products[$selection])) {
        echo "Invalid input!";
    }
    $amount = (int)readline("Enter amount: \n");
    if ($amount > $products[$selection]->qty) {
        echo "We dont have enough=/";
    }

    $products[$selection]->qty -= $amount;
    $theProduct = clone $products[$selection];
    $theProduct->qty = $amount;
    $basket[] = $theProduct;

    $next = readline("Continue shopping? (y/n)");

    if($next == 'y') {
        foreach ($products as $key=>$value) {
            echo " -> $key  $value->name | price:" . $value->price/100 . "$ | available: $value->qty \n";
        }
    } else { $stop = readline( "Proceed to checkout?(y/n) ");}
    if($stop !== 'n') {
        $checkOut();
    }

};
while ($next !== 'n') {
    $shopping();
}






