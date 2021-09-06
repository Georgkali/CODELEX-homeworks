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
    ["1", "-", "-", "-"],
    ["2", "-", "-", "-"],
    ["3", "-", "-", "-"]
];

$decision = readline("Wanna play? y/n: ");

while ($decision == 'y') {

    foreach ($bets as $bet => $coefficient) {
        echo $bet . "$ \n";
    }
    $bet = readline("make your bet: ");

    foreach ($playBoard as $key => $value) {

        for ($i = 0; $i < count($value); $i++) {
            array_splice($playBoard[$key], $i, 1, array_keys($characters)[rand(0, count($characters) - 1)]);
        }
    }

    echo "| " . $playBoard[0][0] . " | " . $playBoard[0][1] . " | " . $playBoard[0][2] . " | " . $playBoard[0][3] . " | \n";
    echo "+ - + - + - + - +\n";
   sleep(1);
    echo "| " . $playBoard[1][0] . " | " . $playBoard[1][1] . " | " . $playBoard[1][2] . " | " . $playBoard[1][3] . " | \n";
    echo "+ - + - + - + - +\n";
   sleep(1);
    echo "| " . $playBoard[2][0] . " | " . $playBoard[2][1] . " | " . $playBoard[2][2] . " | " . $playBoard[2][3] . " | \n";
   sleep(1);

    $lines = [];
    $winLetters = [];
// horizontal lines
    foreach ($playBoard as $row => $value) {
        array_push($lines, $value);
    }

// vertical lines
    for ($i = 0; $i < count($playBoard)+1; $i++) {
        $column = [];
        foreach ($playBoard as $row => $value) {
            array_push($column, $value[$i]);
        }
        array_push($lines, $column);
    }
    //detecting winning diagonals

    $diagonals = [
        [[0, 0], [0, 1], [1, 2], [2, 3]],
        [[2, 0], [1 ,1], [0, 2], [0, 3]],
        [[2, 0], [2, 1], [1, 2], [0, 3]],
        [[0, 0], [1, 1], [2, 2], [2, 3]]
    ];

    foreach ($diagonals as $diagonal=>$index) {
        $diagonalLines = [];
        for($i = 0; $i < count($index); $i++) {
            array_push($diagonalLines, $playBoard[$index[$i][0]][$index[$i][1]]);
        }
        array_push($lines, $diagonalLines);
    }
//var_dump($lines);

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
    if($wallet <= 0) {
        echo "Good Bye! See you soon! \n";
        exit();
    }
    $decision = readline("Wanna play? y/n: ");

}