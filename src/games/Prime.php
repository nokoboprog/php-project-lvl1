<?php

namespace BrainGames\Games\Prime;

use PHP_CodeSniffer\Standards\MySource\Sniffs\PHP\ReturnFunctionValueSniff;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function prime()
{
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

    $gameInfo = function () {
        $randomNumber = rand(0, 20);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        return [$randomNumber, $correctAnswer];
    };

    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        $array = [];
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i === 0) {
                $array[] = $i;
            }
        }
        if (count($array) > 2) {
            return false;
        }
        return true;
    }

    engine($description, $gameInfo);
}
