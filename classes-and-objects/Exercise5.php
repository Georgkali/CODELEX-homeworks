<?php

class Date {
    private int $month;
    private int $day;
    private int $year;
    public function __construct(int $month, int $day, int $year) {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }
    public function getDay(): int
    {
        return $this->day;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getMonth(): int
    {
        return $this->month;
    }
    public function setMonth(int $month): void
    {
        $this->month = $month;
    }
    public function setDay(int $day): void
    {
        $this->day = $day;
    }
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function displayDate() {
        echo $this->getMonth() . "/" . $this->getDay() . "/" . $this->getYear() . "\n";
    }
}

$today = new Date(date("m"), date("d"), date("yy"));
$today->displayDate();