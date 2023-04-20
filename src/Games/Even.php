<?php

namespace BrainGames\Even;

use function BrainGames\Engin\game;

use const BrainGames\Engin\LEVELS;

function brainGameStart()
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < LEVELS; $i += 1) {
        $number = rand(1, 99);
        $parity = isEven($number) ? 'yes' : 'no';

        $qustions[] = $number;
        $answers[] = $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function isEven(int $number)
{
    return $number % 2 === 0;
}
