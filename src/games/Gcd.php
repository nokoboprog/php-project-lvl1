<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.\n";

function gcd()
{
    $gameInfo = function () {
        $randomNumberOne = rand(1, 20);
        $randomNumberTwo = rand(1, 20);
        $questionTail = "{$randomNumberOne} {$randomNumberTwo}";
        $correctAnswer = calculateGcd($randomNumberOne, $randomNumberTwo);
        return [$questionTail, (string) $correctAnswer];
    };

    function calculateGcd($firstNumber, $secondNumber)
    {
        $arrayOne = [];
        $arrayTwo = [];
        for ($i = 1, $j = 1; $i <= $firstNumber, $j <= $secondNumber; $i++, $j++) {
            if (($firstNumber % $i === 0) && ($secondNumber % $j === 0)) {
                $arrayOne[] = $i;
                $arrayTwo[] = $j;
            }
        }
        $generalArray = array_intersect($arrayOne, $arrayTwo);
        return max($generalArray);
    }

    engine(DESCRIPTION, $gameInfo);
}
