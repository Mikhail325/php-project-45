<?php

namespace BrainGames\Prime;

use function BrainGames\Engin\game;

function brainStart()
{
    $gameRule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < NUMBEROFQUSTIONS; $i += 1) {
        $number = rand(1, 99);
        $parity = isPrime($number) ? 'yes' : 'no';

        $qustions[] = $number;
        $answers[] = $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
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
