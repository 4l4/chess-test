<?php

try {
    foreach (glob('src/*.php') as $file) {
        require_once $file;
    }

    $desk = new Desk();

    $args = $argv;
    array_shift($args);

    $currentMoveIsBlack = null;

    foreach ($args as $move) {
        $desk->move($move);
    }

    $desk->dump();
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
    exit(1);
}

function decrementLetter($Alphabet) {
    return chr(ord($Alphabet) - 1);
}

function incrementLetter($Alphabet) {
    return chr(ord($Alphabet) + 1);
}
