<?php

namespace BrainGames\Gcd;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'Find the greatest common divisor of given numbers.';
    $save = [$startQuestion];
    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $parity = gcd($numberOne, $numberTwo);

        $question = "{$numberOne} {$numberTwo}";
        $save[$i] = $question;
        $save[$i + 1] = (string) $parity;
    }
    return $save;
}

function gcd(int $numberOne, int $numberTwo)
{
    while ($numberTwo != 0) {
        $t = $numberOne % $numberTwo;
        $numberOne = $numberTwo;
        $numberTwo = $t;
    }
    return $numberOne;
}
