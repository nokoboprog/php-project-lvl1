<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function findGcd($num1, $num2)
{
    $min = $num1 < $num2 ? $num1 : $num2;
    for ($i = $min; $i > 0; $i--) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            return $i;
        }
    }
}

function gcd()
{
    $getQuestionAnswer = function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $question = "{$num1} {$num2}";
        $correctAnswer = findGcd($num1, $num2);
        return [$question, (string) $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
