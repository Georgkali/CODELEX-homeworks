<?php

function makeHorse(string $name, float $coef, int $position):stdClass
{
    $horse = new stdClass();
    $horse->name = $name;
    $horse->coef = $coef;
    $horse->position = $position;
    return $horse;
}
function makeLine(string $pattern, int $length): array {
    return array_fill(0,$length, $pattern);
}
$horses = [
    makeHorse("%", 2.1, 0),
    makeHorse("$",  2.5, 0),
    makeHorse("#", 2.8, 0)
];

$wallet = (int) readline("How much money you ready to lose?: \n");
$again = 'y';
while ($again == "y") {
    if($wallet == 0) {
        echo "You got nothing on your balance!\n";
        $wallet = (int) readline("Add some money to your balance?: \n");
    }
    foreach ($horses as $horse) {
        $horse->position = 0;
    }
    echo "You got $wallet$ on yor balance.\n Choose your horse \n";

    foreach ($horses as $key => $horse) {
        echo $key + 1 . "-> horse name: $horse->name | win coefficient: $horse->coef \n";
    }

    $horseChoice = (int)readline();
    while (!array_key_exists($horseChoice - 1, $horses)) {
        echo "Invalid input! Try again: \n \n";
        $horseChoice = (int)readline("Choose your horse: \n");
    }
    $bet = (int)readline("Make your bet: ");
    while (($bet * $horses[$horseChoice - 1]->coef) > $wallet) {
        echo "You dont have enough on you balance!($wallet$) \n  Try again: \n";
        $bet = (int)readline("Make your bet: ");
    }

    $lines = [
        makeLine("-", 100),
        makeLine("-", 100),
        makeLine("-", 100),
    ];
    $results = [];
    $run = function () use ($horses, $lines, &$results) {
        foreach ($horses as $key => $horse) {

            $lines[$key][$horse->position] = $horse->name;


            if ($horse->position == count($lines[$key]) - 2) {
                $horse->position += 1;
            } elseif ($horse->position == count($lines[$key]) - 1) {
                $results[] = $horse->name;
                $horse->position += 2;
            } else {
                $horse->position += rand(1, 3);
            }
            echo implode($lines[$key]) . "\n";

        }
        usleep(300000);
    };

    while (count($results) < 3) {
        $run();

        echo "\n";
    }


    foreach ($results as $key => $result) {
        echo ($key + 1) . " place - $result \n";
    }

    if (array_shift($results) == $horses[$horseChoice - 1]->name) {
        echo "You win " . $bet * $horses[$horseChoice - 1]->coef . "$\n";
        $wallet += $bet * $horses[$horseChoice - 1]->coef;

    } else {
        echo "You lose " . $bet * $horses[$horseChoice - 1]->coef . "$\n";
        $wallet -= $bet * $horses[$horseChoice - 1]->coef;
    }
    $again = readline("Play again?(y/n): ");
    if($again == "n") {
        echo "Your balance is $wallet$ \nGood bye!\n";
        exit;
    }
}


