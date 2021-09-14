<?php

class Pistol extends Weapon {
    private string $license = "P";

    public function getLicense(): string
    {
        return $this->license;
    }

}