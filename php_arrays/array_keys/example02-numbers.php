<?php

// Example 01 - Colors
$numbers = [
    '1111111',
    1111111,
    '222222',
    '333333',
];

var_dump(array_keys($numbers));
var_dump(array_keys($numbers, '1111111'));
var_dump(array_keys($numbers, '1111111', true));