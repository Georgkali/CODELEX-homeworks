<?php

class FuelGauge {
    private int $amount;
    public function __construct(int $amount) {
        $this->amount = $amount;
    }
    public function getAmount(): int {
        return $this->amount;
    }
    public function fuelingUp(): void {
        if($this->getAmount() == 0) {
         $this->amount = 70;
        }
    }
    public function fuelBurn(): void {
        $this->amount--;
    }
}

class Odometer {
    private int $mileage;
    public function __construct(int $mileage) {
        $this->mileage = $mileage;
    }
    public function getMileage():int {
        return $this->mileage;
    }

    public function increaseMileage(): void {
        $this->mileage++;
        if($this->mileage > 999999) {
            $this->mileage = 0;
        }

    }
    public function fuelConsumption($obj) {
        if($this->getMileage() % 10 == 0) {
            $obj->fuelBurn();
        }
    }
}

$gauge = new FuelGauge(0);
$odo = new Odometer(0);

for ($i = 0; $i < 10000000; $i++) {
    echo "mileage: " . $odo->getMileage() . "\n fuel: " . $gauge->getAmount() . "\n";
    $odo->increaseMileage();
    $odo->fuelConsumption($gauge);
    $gauge->fuelingUp();
    usleep(1000000);
}