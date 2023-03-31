<?php

namespace BrainGames\Engin;

use function cli\line;
use function cli\prompt;

function startGame()
{
    line('Welcome to the Brain Games!');
    return $numberOfQuestions = 3;
}

function game(string $startQuestion, array $qustion, array $answers)
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('%s', $startQuestion);

    for ($i = 0, $lengh = count($qustion); $i < $lengh; $i += 1) {
        line("Question: %s", $qustion[$i]);
        $answer = prompt('Your answer');
        if ($answers[$i] !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $answers[$i]);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
