<?php

namespace BrainGames\src\games\brainPrime;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $arrayQuestion = [];
    $startQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $number = rand(1, 30);
        isPrime($number) ? $parity = 'yes' : $parity = 'no';
        $arrayQuestion[$number] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
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
