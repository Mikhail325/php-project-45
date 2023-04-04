<?php

namespace BrainGames\Even;

use function BrainGames\Engin\game;

function brainStart()
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < NUMBEROFQUSTIONS; $i += 1) {
        $number = rand(1, 99);
        $parity = isEvent($number) ? 'yes' : 'no';

        $qustions[] = $number;
        $answers[] = $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function isEvent(int $number)
{
    return $number % 2 === 0;
}
