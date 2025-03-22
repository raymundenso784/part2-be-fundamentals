<?php

// Creating an associative array
$person = array(
    "name" => "John",
    "age" => 25,
    "city" => "New York"
);

// Accessing values using keys
echo $person["name"] . '<br/>'; // Output: John
echo $person['age'] . '<br/>'; // Output: 25

// Adding a new key-value pair
$person["gender"] = "Male";

// Removing a key-value pair
unset($person["city"]);

print_r($person);