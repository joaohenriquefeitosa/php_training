<?php

// Example 01 - Positions Keys
$array = array('first' => 1, 'second' => 4);

if(array_key_exists('first', $array)){
    echo "The 'first' element " . $array['first'] . PHP_EOL;
}

if(array_key_exists('second', $array)){
    echo "The 'second' element " . $array['second'] . PHP_EOL;
}