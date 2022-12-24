<?php

// Example 01 - Colors

$colors01 = array("a" => "avocado", "p" => "pear", "m" => "melonwater", "g" => "grape");
$colors02 = array("a" => "avocado", "p" => "pear", "x" => "melonwater");

$result = array_diff_assoc($colors01, $colors02);

print_r($result);