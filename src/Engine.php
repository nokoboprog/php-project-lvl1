<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($description, $gameInfo)
{
    line("\nWelcome to the Brain Game!");
    line($description);
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!\n");

    for ($i = 0; $i < 3; $i++) {
        [$questionTail, $correctAnswer] = $gameInfo();
        line("Question: %s", $questionTail);
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
