<?php
require_once "Stock.php";
require_once "Shelf.php";
require_once "Car.php";



$stock = new Stock([
        new Shelf(new Car("Honda", "Civic", 2015, [2.2, 'diesel']), 420000),
        new Shelf(new Car("Mazda", "3", 2017, [1.7, 'diesel']), 620000),
        new Shelf(new Car("Renault", "Megane", 2019, [1.2, 'petrol']), 520000)
]);

foreach ($stock->getStock() as $item) {
    echo $item->getCar()->getManufacture() . " " . $item->getCar()->getModel() . " " . $item->getCar()->getYear() . "\n";
}

//echo implode($stock->getStock()[2]->getCar()->getEngine());



