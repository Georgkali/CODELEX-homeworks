<?php

function makeEgg(string $name, int $power, int $qty): stdClass {
    $egg = new stdClass();
    $egg->name = $name;
    $egg->power = $power;
    $egg->qty = $qty;
    return $egg;
}

$playerEggs = [
    makeEgg('chickenEgg', 40, 10),
    makeEgg('gooseEgg', 50, 5),
    makeEgg("ostrichEgg", 500, 2)
    ];

$computerEggs = [
    makeEgg('penguinEgg', 70, 10),
    makeEgg('pigeonEgg', 20, 5),
    makeEgg("phoenixEgg", 500, 2)
    ];

$round = function ($roundPlayerEgg, $roundComputerEgg)  {
    $result = $roundPlayerEgg->power + $roundComputerEgg->power;
    $winner = " ";
    $luckyNumber = rand(1, $result);
    echo "lucky number is: $luckyNumber  \n";

    if($roundPlayerEgg->power > $roundComputerEgg->power) {
        if ($luckyNumber <= $roundComputerEgg->power) {
            $winner = "Computer";

        }
        if($luckyNumber > $roundComputerEgg->power) {
            $winner = "Player";
        }
    }
    if($roundPlayerEgg->power < $roundComputerEgg->power) {
        if ($luckyNumber <= $roundPlayerEgg->power) {
            $winner = "Player";

        }
        if ($luckyNumber > $roundPlayerEgg->power) {
            $winner = "Computer";

        }
    }
    if($roundPlayerEgg->power == $roundComputerEgg->power) {
        $winner = ["Player", "Computer"][rand(0,1)];
    }
    return $winner;
};
$question = "y";

while ($question == "y") {
    echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
    echo "Player weapons:";
    foreach ($playerEggs as $egg) {
        echo   " $egg->name ($egg->power) $egg->qty | " ;
    }
    echo "\n";
    echo "Computer weapons:";
    foreach ($computerEggs as $egg) {
         echo " $egg->name ($egg->power) $egg->qty | ";
    }
    echo "\n";
    $roundPlayerEgg = clone $playerEggs[rand(0, count($playerEggs)-1)];
    $roundComputerEgg = clone  $computerEggs[rand(0, count($computerEggs)-1)];
    $playerIndex = array_search($roundPlayerEgg, $playerEggs);
    $computerIndex = array_search($roundComputerEgg, $computerEggs);
    $playerEggs[$playerIndex]->qty -= 1;
    $computerEggs[$computerIndex]->qty -= 1;
    $roundPlayerEgg->qty = 1;
    $roundComputerEgg->qty = 1;


    echo "Player: $roundPlayerEgg->name $roundPlayerEgg->power VS Computer: $roundComputerEgg->name $roundComputerEgg->power \n";
    echo "-------------------------------------\n";
    echo "!!!Round 1!!!\n";

    $round1winner = $round($roundPlayerEgg, $roundComputerEgg);
    echo "$round1winner wins! \n";
    echo "-------------------------------------\n";
    echo "!!!Round 2!!!\n";

    $round2winner = $round($roundPlayerEgg, $roundComputerEgg);
    echo "$round2winner wins! \n";
    echo "-------------------------------------\n";

    if($round1winner !== $round2winner) {
      //  $computerEggs[$computerIndex]->qty -= 1;
      //  $playerEggs[$playerIndex]->qty -= 1;
        echo "Tie \n";
    } elseif ($round1winner == "Player" && $round2winner == "Player") {

        $playerEggs[] = $roundComputerEgg;
        $playerEggs[$playerIndex]->qty += 1;
        echo "Player win the game! \n";
    } else {
        $computerEggs[] = $roundPlayerEgg;
        $computerEggs[$computerIndex]->qty += 1;
        echo "Computer win the game! \n";}

    if($computerEggs[$computerIndex]->qty == 0) {
        array_splice($computerEggs, $computerIndex, 1);
    }
    if($playerEggs[$playerIndex]->qty == 0) {
        array_splice($playerEggs, $playerIndex, 1);
    }

    if(count($playerEggs) == 0) {echo "Player has no weapons!"; exit();}
    if(count($computerEggs) == 0) {echo "Computer has no weapons!"; exit();}


    $question = readline("play again? (y/n): \n");
        if ($question == "n") {
            exit();
        }
}



