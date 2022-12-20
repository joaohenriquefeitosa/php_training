<?php

// Exemple 02 - Letters
$letters = [
    'a' => 2,
    'b' => 6,
    'c' => 5,
];

$flippedLetters = array_flip($letters);
var_dump($flippedLetters);