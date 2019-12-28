<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\engine;

const DESCRIPTION = "What is the result of the expression?\n";

function calc()
{
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

    engine(DESCRIPTION, $gameInfo);
}
