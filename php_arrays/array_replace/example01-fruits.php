<?php

$mainArray = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", "4" => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($mainArray, $replacements, $replacements2);
print_r($basket);