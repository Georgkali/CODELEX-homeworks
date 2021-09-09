<?php

class Customer{
    private string $name;
    private int $wallet;
    public function __construct(string $name, int $wallet)
    {
        $this->name = $name;
        $this->wallet = $wallet;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getWallet(): int
    {
        return $this->wallet;
    }

    public function setWallet(int $wallet): void
    {
        $this->wallet = $wallet;
    }
}