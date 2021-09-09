<?php

class Car {
    private string $manufacture;
    private string $model;
    private int $year;
    private array $engine;
    public function __construct(string $manufacture, string $model, int $year, array $engine) {
        $this->manufacture = $manufacture;
        $this->model = $model;
        $this->year = $year;
        $this->engine = $engine;
    }
    public function getManufacture(): string
    {
        return $this->manufacture;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): int
    {
        return $this->year;
    }
    public function getEngine(): array
    {
        return $this->engine;
    }

}
