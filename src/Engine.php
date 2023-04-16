<?php

namespace BrainGames\Engin;

use function cli\line;
use function cli\prompt;

const LEVELS = 3;

function game(string $gameRule, array $gameData)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('%s', $gameRule);

    for ($i = 0; $i < LEVELS; $i += 1) {
        line("Question: %s", $gameData['qustions'][$i]);
        $answer = prompt('Your answer');
        if ($gameData['answers'][$i] !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $gameData['answers'][$i]);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
