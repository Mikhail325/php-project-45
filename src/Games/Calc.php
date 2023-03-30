<?php

namespace BrainGames\Calc;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'What is the result of the expression?';
    $save[0] = $startQuestion;
    $mathematicalOperations = '';
    $parity = 0;
    $mathematicalOperations = ['+' ,'-', '*'];

    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $numberOne = rand(1, 99);
        $numberTwo = rand(1, 99);
        $sign = rand(0, 2);

        $parity = parity($sign, $numberOne, $numberTwo);
        $question = "{$numberOne} {$mathematicalOperations[$sign]} {$numberTwo}";
        $save[$i] = $question;
        $save[$i + 1] = (string) $parity;
    }
    return $save;
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
