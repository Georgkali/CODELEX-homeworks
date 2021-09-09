<?php
//require_once "Stock.php";


class Welcome{
    public Stock $stock;
    public Customer $customer;
    public function __construct(Customer $customer, Stock $stock)
    {
        $this->stock = $stock;
        $this->customer = $customer;
        echo "Welcome to our shop " . $customer->getName() . "!\n";
        echo "Chek out what we got: \n";
        foreach ($stock->getStock() as $key=>$item) {
            echo $key+1 . " | " . $item->getCar()->getManufacture() . " " . $item->getCar()->getModel() . " " . $item->getCar()->getYear() . " " .
                implode(" ",$item->getCar()->getEngine()) . " " . $item->getPrice()/100 . "$\n";

        }
        $this->makeChoice();


    }
    public function makeChoice() {
        $selection = (int) readline("Make Your choice: \n");
        while(!array_key_exists($selection-1, $this->stock->getStock())) {
            echo "Invalid input! Try again: \n \n";
            $selection = (int) readline("Make Your choice: \n");
        }
        $soldCar = $this->stock->getStock()[$selection-1];
         $this->stock->takeFromStock($selection-1);
        echo "Congratulations " . $this->customer->getName() . " You are now " . $soldCar->getCar()->getManufacture() . " owner! \n";

    }


}