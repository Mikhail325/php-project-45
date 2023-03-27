<?php

namespace BrainGames\src\games\brainGcd;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $startQuestion = 'Find the greatest common divisor of given numbers';
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
