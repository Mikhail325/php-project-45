<?php

namespace BrainGames\src\games\brainGcd;

use function BrainGames\src\Engin\startGame;

function brainCalcStart()
{
    $numberOfQuestions = 3;
    $startQuestion = 'What is the result of the expression?';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $numberOne = rand(1, 30);
        $numberTwo = rand(1, 30);
        $parity = gmp_gcd($numberOne, $numberTwo);
        $parity = gmp_strval($parity);
        $Question = "{$numberOne}, {$numberTwo}";
        $arrayQuestion[$Question] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}
