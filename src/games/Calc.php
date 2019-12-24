<?php

namespace BrainGames\Games\Calc;

use PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function calc()
{
    $description = "What is the result of the expression?\n";

    $gameInfo = function () {
        $randomNumberOne = rand(1, 10);
        $randomNumberTwo = rand(1, 10);
        $operators = ['+', '-', '*'];
        $randomOperator = $operators[rand(0, 2)];
        $questionTail = "{$randomNumberOne} {$randomOperator} {$randomNumberTwo}";
        $correctAnswer = calculate($randomNumberOne, $randomOperator, $randomNumberTwo);
        return [$questionTail, (string) $correctAnswer];
    };

    function calculate($firstNumber, $operator, $secondNumber)
    {
        switch ($operator) {
            case "+":
                return $firstNumber + $secondNumber;
            case "-":
                return $firstNumber - $secondNumber;
            case "*":
                return $firstNumber * $secondNumber;
        }
    }

    engine($description, $gameInfo);
}
