<?php

namespace BrainGames\Gcd;

use function BrainGames\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $arrayQuestion = [];
    $startQuestion = 'Find the greatest common divisor of given numbers.';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $parity = gcd($numberOne, $numberTwo);
        $question = "{$numberOne} {$numberTwo}";
        $arrayQuestion[$question] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}

function gcd(int $numberOne, int $numberTwo)
{
    while ($numberTwo != 0) {
        $t = $numberOne % $numberTwo;
        $numberOne = $numberTwo;
        $numberTwo = $t;
    }
    return $numberOne;
}
