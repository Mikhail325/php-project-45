<?php

namespace BrainGames\src\games\brainGcd;

use function BrainGames\src\Engin\startGame;

function brainStart()
{
    $numberOfQuestions = 3;
    $startQuestion = 'Find the greatest common divisor of given numbers';
    for ($i = 0; $i < $numberOfQuestions; $i++) {
        $numberOne = rand(1, 30);
        $numberTwo = rand(1, 30);
        $parity = gcd($numberOne, $numberTwo);
        $Question = "{$numberOne}, {$numberTwo}";
        $arrayQuestion[$Question] = (string) $parity;
    }
    startGame($startQuestion, $arrayQuestion);
}

function gcd($numberOne, $numberTwo) {
    while ($numberTwo != 0){
        $t = $numberOne % $numberTwo;
        $numberOne = $numberTwo;
        $numberTwo = $t;
      }
      return $numberOne;
}