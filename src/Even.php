<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line();
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line();
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    line();

    $requiredCorrectAnswers = 3;
    $countCorrectAnswers = 0;
    while (true) {
        $randomNumber = rand(1, 100);
        line("Question: %s", $randomNumber);
        $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';
        $userAnswer = prompt('Your answer: ');
        if ($correctAnswer === $userAnswer) {
            line('Correct!');
            $countCorrectAnswers++;
            if ($countCorrectAnswers === $requiredCorrectAnswers) {
                line("Congratulations, %s!", $userName);
                break;
            }
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            break;
        }
    }
}
