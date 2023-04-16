<?php

namespace BrainGames\Gcd;

use function BrainGames\Engin\game;

function brainGameStart()
{
    $gameRule = 'Find the greatest common divisor of given numbers.';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < \BrainGames\Engin\LEVELS; $i += 1) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);

        $question = "{$numberOne} {$numberTwo}";
        $parity = findingTheDivisor($numberOne, $numberTwo);

        $qustions[] = $question;
        $answers[] = (string) $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function findingTheDivisor(int $numberOne, int $numberTwo)
{
    while ($numberTwo != 0) {
        $t = $numberOne % $numberTwo;
        $numberOne = $numberTwo;
        $numberTwo = $t;
    }
    return $numberOne;
}
