<?php

function makeAthlete(string $name, int $position):stdClass
{
    $athlete = new stdClass();
    $athlete->name = $name;
    $athlete->position = $position;
    return $athlete;
}
function makeLine(string $pattern, int $length): array {
    return array_fill(0,$length, $pattern);
}
$athletes = [
    makeAthlete("%",0),
    makeAthlete("$",0),
    makeAthlete("#",0)
];

$again = 'y';
while ($again == "y") {

    foreach ($athletes as $athlete) {
        $athlete->position = 0;
    }
    foreach ($athletes as $key => $athlete) {
        echo $key + 1 . "-> horse name: $athlete->name \n";
    }
    $lines = [
        makeLine("-", 100),
        makeLine("-", 100),
        makeLine("-", 100),
    ];
    $results = [];
    $run = function () use ($athletes, $lines, &$results) {
        foreach ($athletes as $key => $athlete) {

            $lines[$key][$athlete->position] = $athlete->name;
            if ($athlete->position == count($lines[$key]) - 2) {
                $athlete->position += 1;
            } elseif ($athlete->position == count($lines[$key]) - 1) {
                $results[] = $athlete->name;
                $athlete->position += 2;
            } else {
                $athlete->position += rand(1, 3);
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
    $again = readline("Play again?(y/n): ");
    if($again == "n") {

        exit;
    }
}




