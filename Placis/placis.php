<?php
require_once "Customer.php";
require_once "Welcome.php";
require_once "Stock.php";
require_once "Shelf.php";
require_once "Car.php";



$stock = new Stock();

$stock->addToStock(new Shelf(new Car("Honda", "Civic", 2015, [2.2, 'diesel']), 420000));
$stock->addToStock(new Shelf(new Car("Mazda", "3", 2017, [1.7, 'diesel']), 620000));
$stock->addToStock(new Shelf(new Car("Renault", "Megane", 2019, [1.2, 'petrol']), 520000));

//$stock->takeFromStock(0);
$customer = new Customer("John", 1000000);
$welcome = new Welcome($customer, $stock);




