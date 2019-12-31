<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ATTEMPTS_QTY = 3;

function engine($description, $getQuestionAnswer)
{
    line("\nWelcome to the Brain Game!");
    line($description);
    line();
    $userName = prompt('May I have your name?');
    line("Hello, %s!\n", $userName);

    for ($i = 0; $i < ATTEMPTS_QTY; $i++) {
        [$question, $correctAnswer] = $getQuestionAnswer();
        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');
        if ($correctAnswer !== $userAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $userName);
}
