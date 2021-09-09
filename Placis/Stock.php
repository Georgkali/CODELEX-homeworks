<?php

class Stock {
    private array $stock;
    public function __construct(array $stock)
    {
        foreach ($stock as $shelf) {

            $this->addToStock($shelf);
        }
    }
    public function addToStock(Shelf $shelf) {
        $this->stock[] = $shelf;
    }

    public function getStock(): array
    {
        return $this->stock;
    }
}