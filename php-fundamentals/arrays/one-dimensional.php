<?php

$fruits = ['apple', 'orange', 'banana'];

// Accessing array elements
echo $fruits[0] . '<br/>';

// Adding elements to the array
$fruits[] = 'grape';

// Removing the last element
array_pop($fruits);
// Removing data using key
unset($fruits[2]);

print_r($fruits);