<?php

// Exemple 02 - Even Numbers
$numbers = [1, 2, 5, 7, 10, 11, 12, 14, 17, 21, 22];

/**
 * Check if value is even
 */
function even($value)
{
    return $value % 2 == 0;
}

$evenNumbers = array_filter($numbers, 'even');
var_dump($evenNumbers);

// The same above, but using an arrow function
$evenNumbersArrow = array_filter($numbers, fn($value) => $value % 2 == 0);
var_dump($evenNumbersArrow);