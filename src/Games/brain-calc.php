<?php

namespace BrainGames\src\games\brainCalc;

use function BrainGames\src\Engin\startGame;

function brainCalcStart()
{
    $startQuestion = 'What is the result of the expression?';
    for ($i = 0; $i < 3; $i++) {
        $numberOne = rand(1, 30);
        $numberTwo = rand(1, 30);
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
