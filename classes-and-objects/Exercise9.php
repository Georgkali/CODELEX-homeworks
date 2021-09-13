<?php

class BankAcc{
    private string $name;
    private float $money;
    public function __construct(string $name, float $money)
    {
        $this->name = $name;
        $this->money = $money;
    }
    public function showUserNameAndBalance() {
       $sign = $this->money < 0 ? "-" : null;
        echo $this->name . ", " . $sign . "$" . number_format(abs($this->money), 2, ".", "") . "\n";
    }
}

$ben = new BankAcc("Benson", 17.25);
$ben->showUserNameAndBalance();