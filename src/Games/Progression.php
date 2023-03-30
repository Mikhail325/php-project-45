<?php

namespace BrainGames\Progression;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'What number is missing in the progression?';
    $save[0] = $startQuestion;

    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $arrayProgression = [];
        $startNumber = rand(1, 99);
        $lengthProgression = rand(5, 15);
        $stepProgression = rand(1, 10);

        for ($j = 0; $j < $lengthProgression; $j++) {
            $arrayProgression[] = $startNumber;
            $startNumber += $stepProgression;
        }
        
        $indexParity = rand(0, $lengthProgression - 1);
        $parity = $arrayProgression[$indexParity];
        $arrayProgression[$indexParity] = '..';
        $arrayProgression = implode(' ', $arrayProgression);

        $save[$i] = $arrayProgression;
        $save[$i + 1] = (string) $parity;
    }
    return $save;
}
