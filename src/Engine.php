<?php

namespace BrainGames\Engin;

use function cli\line;
use function cli\prompt;

function startGame(string $startQuestion, array $arrayQuestion)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('%s', $startQuestion);
    foreach ($arrayQuestion as $question => $rightAnswer) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($rightAnswer !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
