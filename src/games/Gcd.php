<?php

namespace BrainGames\Games\Gcd;

use PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function gcd()
{
    $description = "Find the greatest common divisor of given numbers.\n";

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

    engine($description, $gameInfo);
}
