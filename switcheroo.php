<?php

switch (true) {
    //first row
    case $gameBoard[0] && $gameBoard[0] == $gameBoard[1] && $gameBoard[1] == $gameBoard[2]:
        $status = $gameBoard[0] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //middle row
    case $gameBoard[3] && $gameBoard[3] == $gameBoard[4] && $gameBoard[4] == $gameBoard[5]:
        $status = $gameBoard[3] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //bottom row
    case $gameBoard[6] && $gameBoard[6] == $gameBoard[7] && $gameBoard[7] == $gameBoard[8]:
        $status = $gameBoard[6] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //first column
    case $gameBoard[0] && $gameBoard[0] == $gameBoard[3] && $gameBoard[3] == $gameBoard[6]:
        $status = $gameBoard[0] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //second column
    case $gameBoard[1] && $gameBoard[1] == $gameBoard[4] && $gameBoard[4] == $gameBoard[7]:
        $status = $gameBoard[1] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //third column
    case $gameBoard[2] && $gameBoard[2] == $gameBoard[5] && $gameBoard[5] == $gameBoard[8]:
        $status = $gameBoard[2] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //diagonal 1
    case $gameBoard[0] && $gameBoard[0] == $gameBoard[4] && $gameBoard[4] == $gameBoard[8]:
        $status = $gameBoard[0] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    //diagonal 2
    case $gameBoard[2] && $gameBoard[2] == $gameBoard[4] && $gameBoard[4] == $gameBoard[8]:
        $status = $gameBoard[2] . " won!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        break;
    case empty($empties):
        $status = "Game over-It's a Tie!";
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
}    