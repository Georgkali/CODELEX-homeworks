<?php

// Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40 that they work in a single week.
// For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.

$hours = (int) readline("Enter working hours: ");
$basePay = (float) readline("Enter base pay: ");
if ($hours > 60) {
    echo "Invalid input!";
    exit;
}
function salaryCalc(int $h, float $pay): float {
    $overtime = $h - 40;
    $salary = ($h - $overtime) * $pay;

    if ($h <= 40) {
        return $salary;
    } else {
        return $salary + ($overtime * ($pay * 1.5));
    }
}
echo salaryCalc($hours, $basePay) . "$";