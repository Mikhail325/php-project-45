<?php

namespace BrainGames\Prime;

use function BrainGames\Engin\startGame;
use function BrainGames\Engin\game;

function brainStart()
{
    $numberOfQuestions = startGame();

    $startQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < $numberOfQuestions; $i += 1) {
        $number = rand(1, 99);
        $parity = isPrime($number) ? 'yes' : 'no';

        $qustions[] = $number;
        $answers[] = $parity;
    }

    game($startQuestion, $qustions, $answers);
}

function isPrime(int $number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
