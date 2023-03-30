<?php

namespace BrainGames\Prime;

function brainStart(int $numberOfQuestions)
{
    $startQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $save[0] = $startQuestion;
    
    for ($i = 1; $i <= $numberOfQuestions; $i += 2) {
        $number = rand(1, 99);
        $parity = '';

        isPrime($number) ? $parity = 'yes' : $parity = 'no';
        
        $save[$i] = $number;
        $save[$i + 1] = (string) $parity;
    }
    return $save;
}

function isPrime(int $number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
