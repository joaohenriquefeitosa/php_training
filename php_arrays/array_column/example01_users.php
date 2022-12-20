<?php

// Example 01 - Users
$users = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

$firstNames = array_column($users, 'first_name');
var_dump($firstNames);

$firstNamesWithIdAsIndex = array_column($users, 'first_name', 'id');
var_dump($firstNamesWithIdAsIndex);