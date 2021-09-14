<?php

class Weapon{
    protected string $name;
    protected string $motion;

    public function __construct(string $name, string $motion)
    {
        $this->name = $name;
        $this->motion = $motion;

    }

        public function getName(): string
    {
        return $this->name;
    }

    public function getMotion(): string
    {
        return $this->motion;
    }

}