<?php

namespace BrainGames\Even;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $save = [$startQuestion];

    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $number = rand(1, 99);
        isEvent($number) ? $parity = 'yes' : $parity = 'no';

        $save[$i] = $number;
        $save[$i + 1] = $parity;
    }
    return $save;
}

function isEvent(int $number)
{
    return $number % 2 === 0;
}
