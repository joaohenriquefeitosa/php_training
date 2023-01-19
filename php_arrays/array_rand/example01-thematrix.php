<?php

// Example 01 - The Matrix

$characters = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$theChosenOne = array_rand($characters);

var_dump($characters[$theChosenOne]);