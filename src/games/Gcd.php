<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.\n";

function findGcd($num1, $num2)
{
    $coll1 = [];
    $coll2 = [];
    for ($i = 1, $j = 1; $i <= $num1, $j <= $num2; $i++, $j++) {
        if (($num1 % $i === 0) && ($num2 % $j === 0)) {
            $coll1[] = $i;
            $coll2[] = $j;
        }
    }
    $totalColl = array_intersect($coll1, $coll2);
    return max($totalColl);
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
