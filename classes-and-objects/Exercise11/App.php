<?php

require_once "Account.php";

$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->getMoney() . PHP_EOL;
echo $bartos_swiss_account->getMoney() . PHP_EOL;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->getMoney() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->getMoney() . PHP_EOL;

echo "Final state" . PHP_EOL;
echo $bartos_account->getMoney() . PHP_EOL;
echo $bartos_swiss_account->getMoney() . PHP_EOL;