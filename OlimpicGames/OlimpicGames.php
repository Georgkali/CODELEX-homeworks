<?php

$line = ["-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-"];
$finish = [];

function makePlayer($name, $start):stdClass {
    $player = new stdClass();
    $player->name = $name;
    $player->start = $start;
    return $player;
}

$players = [
    makePlayer("#", 0),
    makePlayer("@", 0),
    makePlayer("%", 0)
];
/*
$run = function ($player) use ($line, &$players)
{
    $line[$player->start] = $player->name;
    $player->start += rand(1, 2);
    echo $player->start . implode($line) . "\n";

};

foreach ($players as $item=>$value) {
    for($i = $value->start; $value->start < 20;) {
       $run($value);
        sleep(1);
    }
}
*/


$run = function ($player) use ($line, &$finish, &$players)
{
        $line[$player->start] = $player->name;
        $player->start += rand(1,2);
        echo $player->start . implode($line) . "\n";
};

   for($i = 0; $i < 20; $i++) {
       foreach ($players as $player)
           if($player->start < 21) {
       $run($player);
           } else {
               $finish[] = $player->name;
           }
       sleep(1);
       echo "\n";
   }


   $finish = array_unique($finish);
   var_dump($finish);
foreach ($finish as $key=>$value) {
    echo  $key + 1 . "st place->  $value  \n";
}





