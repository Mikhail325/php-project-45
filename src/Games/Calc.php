<?php

namespace BrainGames\Calc;

use function BrainGames\Engin\game;

use const BrainGames\Engin\LEVELS;

function brainGameStart()
{
    $gameRule = 'What is the result of the expression?';
    $qustions = [];
    $answers = [];
    $mathematicalOperations = ['+' ,'-', '*'];

    for ($i = 0; $i < LEVELS; $i += 1) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $sign = array_rand($mathematicalOperations);

        $question = "{$numberOne} {$mathematicalOperations[$sign]} {$numberTwo}";
        $parity = calculate($sign, $numberOne, $numberTwo);

        $qustions[] = $question;
        $answers[] = (string) $parity;
    }

    $gameData = ['qustions' => $qustions, 'answers' => $answers];
    game($gameRule, $gameData);
}

function calculate(int $numberSing, int $numberOne, int $numberTwo)
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
