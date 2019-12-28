<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\engine;

const DESCRIPTION = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

function even()
{
    $gameInfo = function () {
        $randomNumber = rand(1, 100);
        $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';
        return [$randomNumber, $correctAnswer];
    };

    engine(DESCRIPTION, $gameInfo);
}
