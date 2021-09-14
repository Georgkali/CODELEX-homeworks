<?php

require_once "Weapon.php";
require_once "Pistol.php";
require_once "Machinegun.php";

$stock = [
    new MachineGun("AK47", "X(y) = y - 0.002"),
    new Pistol("TT", "X(y) = y - 0.09"),
    new Pistol("Beretta", "X(y) = y - 0.08")
];


class Shop
{
    private array $stock;
    public function __construct(array $stock)
    {
        $this->stock = $stock;
        echo "Welcome! \n";
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->list();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }


        public
        function getWeapons(): array
        {
            return $this->stock;
        }

        public
        function addWeapons($weapon)
        {
            $this->stock[] = $weapon;
        }

        public
        function list() {
        foreach ($this->stock as $key => $gun) {
            echo $key . " | " . $gun->getName() . " | " . $gun->getMotion() . " | " . $gun->getLicense() . PHP_EOL;
        }
    }

}

$shop = new Shop($stock);