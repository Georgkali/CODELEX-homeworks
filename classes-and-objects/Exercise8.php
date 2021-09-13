<?php

class SavingsAccount
{
    private float $totalDeposited = 0;
    private float $totalWithdrawn = 0;
    private float $interestEarned = 0;
    private float $money;
    private float $air;
    private int $months;

    public function __construct()
    {
        $this->money = (int)readline("How much money is in the account?");
        $this->air = (float)readline("Enter the annual interest rate:");
        $this->months = (int)readline("How long has the account been opened?");

        for ($i = 0; $i < $this->months; $i++) {
            $deposited = (float)readline("Enter amount deposited for month " . ($i + 1) . ": \n");
            $this->totalDeposited += $deposited;
            $this->deposit($deposited);
            $withdrawn = (float)readline("Enter amount withdrawn for " . ($i + 1) . ": \n");
            $this->totalWithdrawn += $withdrawn;
            $this->withdrawal($withdrawn);
            $this->monthlyInterest();
        }
        echo "Total deposited: $" . number_format($this->totalDeposited, 2, ".", ",") . "\n";
        echo "Total withdrawn: $" . number_format($this->totalWithdrawn, 2, ".", ",") . "\n";
        echo "Interest earned: $" . number_format($this->interestEarned, 2, ".", ",") . "\n";
        echo "Ending balance: $" . number_format($this->money, 2, ".", ",") . "\n";
    }

    public function deposit($deposited)
    {
        $this->money += $deposited;
    }

    public function withdrawal(float $withdrawn): float
    {
        return $this->money -= $withdrawn;
    }

    public function monthlyInterest(): void
    {
        $this->interestEarned += ($this->air / 12) * $this->money;
        $this->money += ($this->air / 12) * $this->money;
    }
}

$savingAccount = new SavingsAccount();