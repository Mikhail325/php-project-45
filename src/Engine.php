<?php

namespace BrainGames\Engin;

use function cli\line;
use function cli\prompt;

function startGame(string $startGames,)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $numberOfQuestions = 3;
    $theLastElementOfTheArray = $numberOfQuestions * 2;
    $save = call_user_func($startGames, $theLastElementOfTheArray);
    line('%s', $save[0]);

    for ($i = 1, $lengh = count($save); $i < $lengh; $i += 2) {
        line("Question: %s", $save[$i] );
        $answer = prompt('Your answer');
        if ($save[$i + 1] !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $save[$i + 1]);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
