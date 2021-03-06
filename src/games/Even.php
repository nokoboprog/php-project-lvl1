<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function isEven($number): bool
{
    return $number % 2 === 0;
}

function even()
{
    $getQuestionAnswer = function () {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
