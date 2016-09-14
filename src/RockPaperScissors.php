<?php

    class RockPaperScissors
    {
        function playGame($input1, $input2)
        {
            if ($input1 == $input2) {
                return "draw";
            } elseif ($input1 == "Rock" && $input2 == "Scissors") {
                return "Player 1";
            }elseif ($input1 == "Rock" && $input2 == "Paper") {
                return "Player 2";
            }elseif ($input1 == "Scissors" && $input2 == "Paper") {
                return "Player 1";
            }elseif ($input1 == "Scissors" && $input2 == "Rock") {
                return "Player 2";
            }elseif ($input1 == "Paper" && $input2 == "Rock") {
                return "Player 1";
            }elseif ($input1 == "Paper" && $input2 == "Scissors") {
                return "Player 2";
            }



        }



    }


 ?>
