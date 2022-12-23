<?php

// Example 02 - Fruits
$colors = [
    'yellow',
    'red',
    'green'
];

$fruits = [
    'banana',
    'apple',
    'avocado'
];

$colorFruits = array_combine($colors, $fruits);
var_dump($colorFruits);