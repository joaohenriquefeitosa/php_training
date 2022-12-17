<?php

// Exemple 01 - Driver License

$ages = [10, 22, 9, 55, 47, 14, 19, 17];
$people = [
    'Mike' => 10,
    'Luiza' => 22,
    'Michel' => 9,
    'Megan' => 55,
    'Jack' => 47,
    'Saly' => 14,
    'John' => 19,
    'Paul' => 17,
];

/**
 * Check if the values is equal to or greater than the limit
 * 
 * @param int $value
 * @return int
 */
function checkAge($value)
{
    // The minimum age for a driver license in Brazil
    $limit = 18;

    return $value >= $limit;
}

$agesAllowed = array_filter($ages, 'checkAge');
var_dump($agesAllowed);

$peopleAllowed = array_filter($people, 'checkAge');
var_dump($peopleAllowed);

// In this case we change the key => value, now the age it's the key and the name it's the value
$peopleFlippedAllowed = array_filter(array_flip($people), 'checkAge', ARRAY_FILTER_USE_KEY);
var_dump($peopleFlippedAllowed);