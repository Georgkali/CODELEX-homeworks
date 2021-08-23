<?php

$board = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "],
];

$turn = "X";

function display_board(array $board)
{
    echo " " .  $board[0][0] . " | " . $board[0][1] . " | " . $board[0][2] . " \n";
    echo "---+---+---\n";
    echo " " .  $board[1][0] . " | " . $board[1][1] . " | " . $board[1][2] . " \n";
    echo "---+---+---\n";
    echo " " .  $board[2][0] . " | " . $board[2][1] . " | " . $board[2][2] . " \n";
}



function makeMove(array &$arr, $turn): array {

    list($x, $y) = explode(" ", readline("Make your move(row, column): "));
    $x = (int)$x;
    $y = (int)$y;
    $rep = [$y-1 => $turn];
    $arr[$x-1] = array_replace($arr[$x-1], $rep);
    return $arr;
}



$i = 0;

while ($i < 4) {
makeMove($board, $turn);
display_board($board);
$turn == "X" ? $turn = "O" : $turn = "X";
$i++;

}



