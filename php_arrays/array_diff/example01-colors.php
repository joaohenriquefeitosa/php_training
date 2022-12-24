<?php

// Example 01 - Colors

$colors01 = array("green", "blue", "red");
$colors02 = array("yellow", "red", "purple");

$result = array_diff($colors01, $colors02);

print_r($result);