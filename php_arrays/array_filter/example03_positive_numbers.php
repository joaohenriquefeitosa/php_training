<?php

// Exemple 03 - Positive Numbers
$numbers = [-2, 10, -9, 8, 7, 11, -4, -5];

/**
 * Check if value is positive
 * 
 * @param int $value
 * @param int
 */
function positive($value)
{
    return $value > 0;
}

$positiveNumbers = array_filter($numbers, 'positive');
var_dump($positiveNumbers);

$positiveNumbersArrow = array_filter($numbers, fn($value) => $value > 0);
var_dump($positiveNumbersArrow);