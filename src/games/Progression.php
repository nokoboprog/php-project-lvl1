<?php

namespace BrainGames\Games\Progression;

use PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function progression()
{
    $description = "Find the greatest common divisor of given numbers.\n";

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

    engine($description, $gameInfo);
}
