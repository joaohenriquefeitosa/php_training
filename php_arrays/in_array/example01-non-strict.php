<?php

// Example 01 - Non strict
$os = array("Mac", "NT", "Irix", "Linux", 1);

if(in_array("Mac", $os)){
    echo "Mac it's in the array.". PHP_EOL;
}

if(in_array("1", $os)){
    echo "1 (string) it's in the array." . PHP_EOL;
}