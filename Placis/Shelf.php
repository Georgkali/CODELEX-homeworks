<?php


class Shelf {
    private Car $car;
    private int $price;
    public function __construct(Car $car, int $price) {
        $this->car = $car;
        $this->price = $price;
    }

    public function getCar(): Car
    {
        return $this->car;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}