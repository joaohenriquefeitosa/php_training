<?php

// Example 01 - Upper Case

$names = [
    'john',
    'paul',
    'mike',
    'megan',
    'mary',
    'sally'
];

/**
 * Return a string with the first letter upper case
 * 
 * @param string $name
 * @return string
 */
function convertNameUCFirst($name)
{
    return mb_convert_case($name, MB_CASE_TITLE);
}

$namesUC = array_map('convertNameUCFirst', $names);

var_dump($namesUC);

$namesUCArrow = array_map(fn($name) => mb_convert_case($name, MB_CASE_TITLE), $names);

var_dump($namesUCArrow);