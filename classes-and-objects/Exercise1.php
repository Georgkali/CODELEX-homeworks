<?php

class Product {
    private string $name;
    private int $price;
    private int $amount;
    public function __construct(string $name, int $price, int $amount) {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getPrice(): int {
        return $this->price;
    }
    public function setPrice($price) {
        return $this->price = $price;
    }
    public function getAmount(): int {
        return $this->amount;
    }
    public function setAmount($amount) {
        return $this->amount = $amount;
    }
    public function printProduct(): void {
        echo "$this->name, $this->price, $this->amount \n";
    }

}
$products = [
    new Product("Logitech mouse", 70, 14),
    new Product("Iphone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];

$products[1]->setPrice(800);
$products[1]->setAmount(10000);

foreach ($products as $product) {
    echo $product->printProduct();
}