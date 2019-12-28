<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Find the greatest common divisor of given numbers.\n";

function progression()
{
    $gameInfo = function () {
        $randomNumber = rand(3, 50);
        $randomConst = rand(1, 3);
        $array = [];
        for ($i = 0; $i < 10 * $randomConst; $i += $randomConst) {
            $array[] = $randomNumber + $i;
        }
        $correctAnswer = $array[rand(0, 9)];
        $questionTail = '';
        for ($i = 0; $i < 10; $i++) {
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
