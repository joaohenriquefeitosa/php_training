<?php

$collors = ["blue","red","green","pink","orange","purple","grey"];

$selected = array_rand($collors, 3);

foreach($selected as $colorIndex){
    echo $collors[$colorIndex] . PHP_EOL;
}