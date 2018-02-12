<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/////////////////////////
if (!empty($empties)) {
    
} else {
    ///////////////////
    if ($gameBoard[0] === "X" || $gameBoard[0] === "O" && $gameBoard[0] == $gameBoard[1] && $gameBoard[1] == $gameBoard[2]) {
        $status = $gameBoard[0];
        return;
    }

    //middle row
    if ($gameBoard[3] && $gameBoard[3] == $gameBoard[4] && $gameBoard[4] == $gameBoard[5]) {
        $status = $gameBoard[3];
        return;
    }

    //bottom row
    if ($gameBoard[6] && $gameBoard[6] == $gameBoard[7] && $gameBoard[7] == $gameBoard[8]) {
        $status = $gameBoard[6];
        return;
    }

    //first column
    if ($gameBoard[0] && $gameBoard[0] == $gameBoard[3] && $gameBoard[3] == $gameBoard[6]) {
        $status = $gameBoard[0];
        return;
    }

    //second column
    if ($gameBoard[1] && $gameBoard[1] == $gameBoard[4] && $gameBoard[4] == $gameBoard[7]) {
        $status = $gameBoard[1];
        return;
    }

    //third column
    if ($gameBoard[2] && $gameBoard[2] == $gameBoard[5] && $gameBoard[5] == $gameBoard[8]) {
        $status = $gameBoard[2];
        return;
    }

    //diagonal 1
    if ($gameBoard[0] && $gameBoard[0] == $gameBoard[4] && $gameBoard[4] == $gameBoard[8]) {
        $status = $gameBoard[0];
        return;
    }

    //diagonal 2
    if ($gameBoard[2] && $gameBoard[2] == $gameBoard[4] && $gameBoard[4] == $gameBoard[8]) {
        $status = $gameBoard[2];
        return;
    }

    if ($this->totalMoves >= 9) {
        $status = "Tie";
        return;
    }
}