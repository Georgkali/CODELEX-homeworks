<?php

$board = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "],
];

$turn = "X";

$displayBoard = function() use (&$board) {
    echo " " .  $board[0][0] . " | " . $board[0][1] . " | " . $board[0][2] . " \n";
    echo "---+---+---\n";
    echo " " .  $board[1][0] . " | " . $board[1][1] . " | " . $board[1][2] . " \n";
    echo "---+---+---\n";
    echo " " .  $board[2][0] . " | " . $board[2][1] . " | " . $board[2][2] . " \n";
};

$isEmpty = function(int $row, int $column ) use (&$board) {
  return $board[$row][$column] === " ";
};

$makeMove = function(string $turn, string $row, string $column) use (&$board) {
     //$replacement = [$column - 1 => $turn];
     //$board[$row - 1] = array_replace($board[$row - 1], $replacement);
    $board[$row - 1][$column - 1] = $turn;
    return $board;
 };

$tie = function() use (&$board): bool {
  for($r = 0; $r < 3; $r++) {
      for ($c = 0; $c < 3; $c++) {
          if ($board[$r][$c] === " ") {
              return false;}
      }
  }
  return true;
};

$win = function(string $turn) use (&$board): bool {
    for ($i = 0; $i < 3; $i++) {
        if ($turn == $board[$i][0] && $turn == $board[$i][1] && $turn == $board[$i][2]) {
            return true;
        }
        if ($turn == $board[0][$i] && $turn == $board[1][$i] && $turn == $board[2][$i]) {
            return true;
        }
        if ($turn == $board[0][0] && $turn == $board[1][1] && $turn == $board[2][2]) {
            return true;
        }
        if ($turn == $board[0][2] && $turn == $board[1][1] && $turn == $board[2][0]) {
            return true;
            }
        }
    return false;
};

$displayBoard();

while (!$tie() || !$win($turn)) {
    $input = [$row, $column] = explode(" ", readline( $turn . " Make your move(row, column): "), 2);

    if(!$isEmpty($row -1, $column -1))
    { echo "Try another cell! ";
        continue;}
    $makeMove($turn, $row, $column);
    $displayBoard();
    if ($win($turn)) {
        echo $turn . " Win!";
        exit;}
    if ($tie()) {
        echo "Tie!";
        exit;}
    ($turn == "X") ? $turn = "O" : $turn = "X";
}
