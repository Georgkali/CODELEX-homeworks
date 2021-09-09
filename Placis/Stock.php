<?php

class Stock {
    private ?array $stock;
    public function __construct(array $stock = null)
    {
      $this->stock = $stock;
    }
    public function addToStock(Shelf $shelf) {
        $this->stock[] = $shelf;
    }
    public function takeFromStock($i) {
        unset($this->stock[$i]);
    }
    public function getStock(): array
    {
        return $this->stock;
    }

}