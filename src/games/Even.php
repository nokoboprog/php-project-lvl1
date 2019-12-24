<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engine;

function even()
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

    $gameInfo = function () {
        $randomNumber = rand(1, 100);
        $correctAnswer = ($randomNumber % 2 === 0) ? 'yes' : 'no';
        return [$randomNumber, $correctAnswer];
    };

    engine($description, $gameInfo);
}
