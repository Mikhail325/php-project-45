<?php

namespace BrainGames\src\games\brainPrime;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $startQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $number = rand(1, 30);
        isPrime($number) ? $parity = 'yes' : $parity = 'no';
        $arrayQuestion[$number] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}

function isPrime($n)
{
    for ($x = 2; $x <= sqrt($n); $x++) {
        if ($n % $x == 0) {
            return false;
        }
    }
    return true;
}
