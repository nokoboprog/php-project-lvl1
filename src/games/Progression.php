<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.\n";
const PROGRESSION_LENGTH = 10;

function progression()
{
    $gameInfo = function () {
        $randomNumber = rand(5, 50);
        $progressionStep = rand(1, 5);
        $array = [];
        for ($i = 0; $i < PROGRESSION_LENGTH * $progressionStep; $i += $progressionStep) {
            $array[] = $randomNumber + $i;
        }
        $correctAnswer = $array[array_rand($array)];
        $questionTail = '';
        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            if ($array[$i] === $correctAnswer) {
                $questionTail .= '.. ';
            } else {
                $questionTail .= "{$array[$i]} ";
            }
        }
        return [trim($questionTail), (string) $correctAnswer];
    };

    engine(DESCRIPTION, $gameInfo);
}
