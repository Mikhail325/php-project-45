<?php

namespace BrainGames\Prime;

use function BrainGames\Engin\game;

function brainGameStart()
{
    $gameRule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $qustions = [];
    $answers = [];

    for ($i = 0; $i < \BrainGames\Engin\LEVELS; $i += 1) {
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
    if ($number == 0 || $number == 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
