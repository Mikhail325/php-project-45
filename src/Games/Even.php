<?php

namespace BrainGames\Even;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $save[0] = $startQuestion;

    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $number = rand(1, 99);
        isEvent($number) ? $parity = 'yes' : $parity = 'no';

        $save[$i] = $number;
        $save[$i + 1] = (string) $parity;
    }
    return $save;
}

function isEvent($number)
{
    return $number % 2 === 0;
}
