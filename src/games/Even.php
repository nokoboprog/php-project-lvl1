<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

function even()
{
    $gameInfo = function () {
        $randomNumber = rand(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        return [$randomNumber, $correctAnswer];
    };

    function isEven($number): bool
    {
        return $number % 2 === 0;
    }

    engine(DESCRIPTION, $gameInfo);
}
