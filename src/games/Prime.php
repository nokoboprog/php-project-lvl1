<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

function prime()
{
    $gameInfo = function () {
        $randomNumber = rand(0, 20);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        return [$randomNumber, $correctAnswer];
    };

    function isPrime($number): bool
    {
        if ($number < 2) {
            return false;
        }
        for ($divider = 2; $divider <= sqrt($number); $divider++) {
            if ($number % $divider === 0) {
                return false;
            }
        }
        return true;
    }

    engine(DESCRIPTION, $gameInfo);
}
