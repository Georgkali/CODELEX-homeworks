<?php

$wallet = 500;
$bet = 0;
$characters = [
    "A" => 10,
    "D" => 10,
    "B" => 20,
    "C" => 30,
];

$bets = [
    "10" => 1,
    "20" => 2,
    "40" => 4,
    "80" => 6
];

$playBoard = [
    1 => ["1", "-", "-", "-"],
    2 => ["2", "-", "-", "-"],
    3 => ["3", "-", "-", "-"]
];

$diagonals = [
    [["A", "D"],  ["A"], ["B",],  ["B", "C"]],

    [[" "],  ["B", "D"],  ["A", "C"],  [" "]],

    [["B", "C"],  ["C"], ["D"],   ["A", "D"]]
];

$decision = readline("Wanna play? y/n: ");
if($decision === 'y') {
    foreach ($bets as $bet => $coefficient) {
        echo $bet . "$ \n";
    }
    $bet = readline("make your bet: ");
}
while ($decision == 'y') {
    foreach ($playBoard as $key => $value) {
        for ($i = 0; $i < count($value); $i++) {
            array_splice($playBoard[$key], $i, 1, array_keys($characters)[rand(0, count($characters) - 1)]);
        }
    }

    echo "| " . $playBoard[1][0] . " | " . $playBoard[1][1] . " | " . $playBoard[1][2] . " | " . $playBoard[1][3] . " | \n";
    echo "+ - + - + - + - +\n";
    echo "| " . $playBoard[2][0] . " | " . $playBoard[2][1] . " | " . $playBoard[2][2] . " | " . $playBoard[2][3] . " | \n";
    echo "+ - + - + - + - +\n";
    echo "| " . $playBoard[3][0] . " | " . $playBoard[3][1] . " | " . $playBoard[3][2] . " | " . $playBoard[3][3] . " | \n";
    foreach ($diagonals as $diagonal) {
        var_dump(array_search("A", $diagonal));
    }
    $lines = [];
    $winLetters = [];
// horizontal lines
    foreach ($playBoard as $row => $value) {
        array_push($lines, $value);
    }

// vertical lines
    for ($i = 0; $i < count($playBoard); $i++) {
        $column = [];
        foreach ($playBoard as $row => $value) {
            array_push($column, $value[$i]);
        }
        array_push($lines, $column);
    }


//detect winning lines
    foreach ($lines as $line) {
        $line = array_unique($line);
        if (count($line) === 1) {
            array_push($winLetters, $line[0]);
            echo $line[0] . " Wins! \n";
        }
    }
    $prize = 0;

    foreach ($characters as $character => $cost) {
        foreach ($winLetters as $letter) {
            if ($character == $letter) {
                $prize = ($prize + $cost)*$bets[$bet];
                $wallet = $wallet + $prize;

            }
        }
    }

    echo "You won " . $prize . "$ \n";
    if ($prize === 0) {
        $wallet = $wallet - $bet*$bets[$bet];
        echo "You lose " . $bet*$bets[$bet] . "$ \n";
    }
    echo $wallet . "$ in your wallet \n";
    if($wallet < 0) {
        echo "Good Bye! See you soon! \n";
        exit();
    }
    $decision = 'n';
    $decision = readline("Wanna play? y/n: ");
    if($decision === 'y') {
        foreach ($bets as $bet => $coefficient) {
            echo $bet . "\n";
        }
        $bet = readline("make your bet: ");
    }

}