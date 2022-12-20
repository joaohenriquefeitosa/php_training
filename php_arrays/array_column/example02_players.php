<?php

$players = [
    [
        "name" => "Paul",
        "sport" => 'Football',
    ],
    [
        "name" => "John",
        "sport" => 'Basketball',
    ],
    [
        "name" => "Mike",
        "sport" => 'Chess',
    ],
];

$sports = array_column($players, 'sport');
var_dump($sports);

$players = array_column($players, 'name');
var_dump($players);