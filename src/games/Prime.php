<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number): bool
{
    if ($number < 2) {
        return false;
    }
    for ($divider = 2; $divider <= sqrt($number); $divider++) {
        if ($number % $divider === 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $getQuestionAnswer = function () {
        $question = rand(0, 20);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
