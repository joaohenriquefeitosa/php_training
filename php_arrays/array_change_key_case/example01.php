<?php

// Example 01
$arrUpper = [
    'FIRST' => 1,
    'SECOND' => 5
];

// Lower by parameter
$lowerArray = array_change_key_case($arrUpper, CASE_LOWER);
var_dump($lowerArray);

// Upper
$upperArray = array_change_key_case($lowerArray, CASE_UPPER);
var_dump($upperArray);