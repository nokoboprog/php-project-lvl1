<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\engine;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculateCorrectAnswer($num1, $num2, $operator)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
    }
}

function calc()
{
    $getQuestionAnswer = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $operator = OPERATORS[array_rand(OPERATORS)];
        $question = "{$num1} {$operator} {$num2}";
        $correctAnswer = calculateCorrectAnswer($num1, $num2, $operator);
        return [$question, (string) $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
