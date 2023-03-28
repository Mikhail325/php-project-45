<?php

namespace BrainGames\src\games\brainProgression;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $startQuestion = 'What number is missing in the progression?';
    $arrayQuestion = [];
    $numberOfQuestions = 3;
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $startNumber = rand(1, 99);
        $lengthProgression = rand(5, 15);
        $stepProgression = rand(1, 10);
        $arrayProgression = [];
        for ($j = 0; $j < $lengthProgression; $j++) {
            $arrayProgression[] = $startNumber;
            $startNumber += $stepProgression;
        }
        $indexParity = rand(0, $lengthProgression - 1);
        $parity = $arrayProgression[$indexParity];
        $arrayProgression[$indexParity] = '..';
        $arrayProgression = implode(' ', $arrayProgression);
        $arrayQuestion[$arrayProgression] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}
