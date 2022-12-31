<?php

// Example 01 - Count Letters

$arr = array(
    'fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);

echo count($arr) . PHP_EOL;
echo count($arr, COUNT_RECURSIVE) . PHP_EOL;