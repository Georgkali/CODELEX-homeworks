<?php

//$surveyed = 12467;
//$purchased_energy_drinks = 0.14;
//$prefer_citrus_drinks = 0.64;

class Energy {
    private int $surveyed;
    private float $energyDrinks;
    private float $citrus;
    public function __construct(int $surveyed, float $energyDrinks, float $citrus) {
        $this->surveyed = $surveyed;
        $this->energyDrinks = $energyDrinks;
        $this->citrus = $citrus;
    }

    public function energyCustomers():int {
        return intval($this->surveyed * $this->energyDrinks);
    }
    public function citrusEnergyCustomers():int {
        return intval($this->energyCustomers() * $this->citrus);
    }
}

$customers = new Energy(12467, 0.14, 0.64);
var_dump($customers->energyCustomers(), $customers->citrusEnergyCustomers());