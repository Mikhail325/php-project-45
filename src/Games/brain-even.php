<?php

namespace BrainGames\src\games\brainEven;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $arrayQuestion = [];
    $startQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $number = rand(1, 30);
        $number % 2 == 0 ? $parity = 'yes' : $parity = 'no';
        $arrayQuestion[$number] = $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}
