<?php

namespace BrainGames\Calc;

use function BrainGames\Engin\startGame;
use function BrainGames\Engin\game;

function brainStart()
{
    $numberOfQuestions = startGame();

    $startQuestion = 'What is the result of the expression?';
    $qustions = [];
    $answers = [];
    $parity = 0;
    $mathematicalOperations = ['+' ,'-', '*'];

    for ($i = 0; $i < $numberOfQuestions; $i += 1) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $sign = array_rand($mathematicalOperations);

        $question = "{$numberOne} {$mathematicalOperations[$sign]} {$numberTwo}";
        $parity = parity($sign, $numberOne, $numberTwo);

        $qustions[] = $question;
        $answers[] = (string) $parity;
    }

    game($startQuestion, $qustions, $answers);
}

function parity(int $numberSing, int $numberOne, int $numberTwo)
{
    switch ($numberSing) {
        case 0:
            return $parity = $numberOne + $numberTwo;
        case 1:
            return $parity = $numberOne - $numberTwo;
        case 2:
            return $parity = $numberOne * $numberTwo;
    }
}
