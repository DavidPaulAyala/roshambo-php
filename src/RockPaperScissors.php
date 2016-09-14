<?php

    class RockPaperScissors
    {
        function playGame($input1, $input2)
        {
            if ($input1 == $input2) {
                return "draw";
            } elseif ($input1 == "rock" && $input2 == "scissors") {
                return "Player 1";
            }elseif ($input1 == "rock" && $input2 == "paper") {
                return "Player 2";
            }elseif ($input1 == "scissors" && $input2 == "paper") {
                return "Player 1";
            }elseif ($input1 == "scissors" && $input2 == "rock") {
                return "Player 2";
            }elseif ($input1 == "paper" && $input2 == "rock") {
                return "Player 1";
            }elseif ($input1 == "paper" && $input2 == "scissors") {
                return "Player 2";
            }



        }



    }


 ?>
