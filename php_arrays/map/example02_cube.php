<?php

// Example 02 - Cube

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

/**
 * Returns a cube of a number
 * 
 * @param int $number
 * @param int
 */
function cube($number)
{
    return $number ** 3;
}

$cubes = array_map('cube', $numbers);
var_dump($cubes);

$cubesArrow = array_map(fn($number) => $number ** 3, $numbers);
var_dump($cubesArrow);