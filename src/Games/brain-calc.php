<?php

namespace BrainGames\src\games\brainCalc;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $startQuestion = 'What is the result of the expression?';
    $numberOfQuestions = 3;
    $arrayQuestion = [];
    $mathematicalOperations = '';
    $parity = 0;
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        switch (rand(0, 2)) {
            case 0:
                $parity = $numberOne + $numberTwo;
                $mathematicalOperations = '+';
                break;
            case 1:
                $parity = $numberOne - $numberTwo;
                $mathematicalOperations = '-';
                break;
            case 2:
                $parity = $numberOne * $numberTwo;
                $mathematicalOperations = '*';
                break;
        }
        $Question = "{$numberOne} {$mathematicalOperations} {$numberTwo}";
        $arrayQuestion[$Question] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}
