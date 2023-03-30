<?php

namespace BrainGames\Calc;

use function BrainGames\Engin\startGame;

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
        $question = "{$numberOne} {$mathematicalOperations} {$numberTwo}";
        $arrayQuestion[$question] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}
