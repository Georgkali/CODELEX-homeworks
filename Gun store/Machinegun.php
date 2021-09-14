<?php

class MachineGun extends Weapon {
    private string $license = "MG";

    public function getLicense(): string
    {
        return $this->license;
    }
}