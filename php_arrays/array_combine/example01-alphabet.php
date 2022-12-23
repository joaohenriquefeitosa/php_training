<?php

// Example 01 - Alphabet
$keys = [
    'a',
    'b',
    'c',
];

$values = [
    'alpha',
    'beta',
    'charlie'
];

$alphabet = array_combine($keys, $values);
var_dump($alphabet);