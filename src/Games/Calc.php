<?php

namespace BrainGames\Calc;

use function BrainGames\Engin\game;

function brainStart()
{
    $gameRule = 'What is the result of the expression?';
    $qustions = [];
    $answers = [];
    $mathematicalOperations = ['+' ,'-', '*'];

    for ($i = 0; $i < NUMBEROFQUSTIONS; $i += 1) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $sign = array_rand($mathematicalOperations);

        $question = "{$numberOne} {$mathematicalOperations[$sign]} {$numberTwo}";
        $parity = parity($sign, $numberOne, $numberTwo);

        $qustions[] = $question;
        $answers[] = (string) $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function parity(int $numberSing, int $numberOne, int $numberTwo)
{
    switch ($numberSing) {
        case 0:
            return $numberOne + $numberTwo;
        case 1:
            return $numberOne - $numberTwo;
        case 2:
            return $numberOne * $numberTwo;
    }
}
