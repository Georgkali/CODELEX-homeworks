<?php
class Account{
    private string $name;
    private float $money;
    public function __construct(string $name, float $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMoney(): float
    {
        return $this->money;
    }

    public function deposit(float $money): void
    {
        $this->money += $money;
    }

    public function withdrawal(float $money): void
    {
        $this->money -= $money;
    }
}