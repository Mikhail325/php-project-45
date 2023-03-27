<?php

namespace BrainGames\src\Engin;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greetTheUser;

function startGame($startQuestion, $arrayQuestion)
{
    $name = greetTheUser();
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
