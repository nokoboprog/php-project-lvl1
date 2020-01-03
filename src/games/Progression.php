<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\engine;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function progression()
{
    $getQuestionAnswer = function () {
        $randomNum = rand(5, 50);
        $progressionStep = rand(1, 5);
        $coll = [];
        for ($i = 0; $i < PROGRESSION_LENGTH * $progressionStep; $i += $progressionStep) {
            $coll[] = $randomNum + $i;
        }
        $correctAnswer = $coll[array_rand($coll)];
        $question = [];
        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            if ($coll[$i] === $correctAnswer) {
                $question[] = '..';
            } else {
                $question[] = $coll[$i];
            }
        }
        return [trim(implode(' ', $question)), (string) $correctAnswer];
    };

    engine(DESCRIPTION, $getQuestionAnswer);
}
