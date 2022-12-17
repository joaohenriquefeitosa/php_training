<?php

// Exemple 03 - Reverse String

$phrases = [
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Morbi consequat nisl purus, nec pretium libero dictum id.',
    'Aliquam dignissim nibh neque, nec scelerisque erat vestibulum a.',
    'Nulla leo est, dignissim at leo vel, hendrerit consectetur lacus.'
];

/**
 * Return a string reverse
 * 
 * @param string $prhase
 * @return string
 */
function reverseString($phrase)
{
    return strrev($phrase);
}

$response = array_map('reverseString', $phrases);
var_dump($response);

$responseArrow = array_map(fn($phrase) => strrev($phrase), $phrases);
var_dump($responseArrow);