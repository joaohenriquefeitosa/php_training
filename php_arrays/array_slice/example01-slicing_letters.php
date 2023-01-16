<?php

$letters = array("a", "b", "c", "d", "e");

$output01 = array_slice($letters, 2);
var_dump($output01);

$output01 = array_slice($letters, 2, 2);
var_dump($output01);

$output01 = array_slice($letters, 0, 2);
var_dump($output01);

$output01 = array_slice($letters, -2, 2);
var_dump($output01);

$output01 = array_slice($letters, 2, -1);
var_dump($output01);

$output01 = array_slice($letters, 2, -1, true);
var_dump($output01);