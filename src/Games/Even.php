<?php

namespace BrainGames\Even;

use function BrainGames\Engin\startGame;
use function BrainGames\Engin\game;

function brainStart()
{
    $numberOfQuestions = startGame();

    $startQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < $numberOfQuestions; $i += 1) {
        $number = rand(1, 99);
        $parity = isEvent($number) ? 'yes' : 'no';

        $qustions[] = $number;
        $answers[] = $parity;
    }

    game($startQuestion, $qustions, $answers);
}

function isEvent(int $number)
{
    return $number % 2 === 0;
}
