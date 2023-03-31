<?php

namespace BrainGames\Gcd;

use function BrainGames\Engin\startGame;
use function BrainGames\Engin\game;

function brainStart()
{
    $numberOfQuestions = startGame();

    $startQuestion = 'Find the greatest common divisor of given numbers.';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < $numberOfQuestions; $i += 1) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);

        $question = "{$numberOne} {$numberTwo}";
        $parity = gcd($numberOne, $numberTwo);

        $qustions[] = $question;
        $answers[] = (string) $parity;
    }

    game($startQuestion, $qustions, $answers);
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
