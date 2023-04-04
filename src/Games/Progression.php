<?php

namespace BrainGames\Progression;

use function BrainGames\Engin\game;

function brainStart()
{
    $gameRule = 'What number is missing in the progression?';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < NUMBEROFQUSTIONS; $i += 1) {
        $arrayProgression = [];
        $startNumber = rand(1, 99);
        $lengthProgression = rand(5, 15);
        $stepProgression = rand(1, 10);

        $arrayProgression = progression($startNumber, $stepProgression, $lengthProgression);

        $indexParity = rand(0, $lengthProgression - 1);
        $parity = $arrayProgression[$indexParity];
        $arrayProgression[$indexParity] = '..';
        $arrayProgression = implode(' ', $arrayProgression);

        $qustions[] = $arrayProgression;
        $answers[] = (string) $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function progression(int $startNumber, int $stepProgression, int $lengthProgression)
{
    $arrayProgression = [];
    for ($j = 0; $j < $lengthProgression; $j++) {
        $arrayProgression[] = $startNumber;
        $startNumber += $stepProgression;
    }
    return $arrayProgression;
}
