<?php

// Example 01 - Letters
$letters = [
    'a',
    'b',
    'c',
    'd',
    'e'
];

$responseNoKeysPreserved = array_chunk($letters, 2);
$responseKeysPreserved = array_chunk($letters, 2, true);

var_dump($responseNoKeysPreserved);
var_dump($responseKeysPreserved);