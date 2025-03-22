<?php

$players = [
    [
        'name' => 'Lebron James',
        'number' => 23,
        'team' => 'Lakers'
    ],
    [
        'name' => 'Russell Westbrook',
        'number' => 0,
        'team' => 'Clippers'
    ],
    [
        'name' => 'Victor Wembanyama',
        'number' => 1,
        'team' => 'Spurs'
    ],
];

echo "<pre>";
print_r($players);
echo "</pre><br/>";

// Add
$players[] = [
    'name' => 'Luka Doncic',
    'number' => 77,
    'team' => 'Mavericks'
];
echo "<pre>";
print_r($players);
echo "</pre><br/>";

// Pop
array_pop($players);
echo "<pre>";
print_r($players);
echo "</pre><br/>";

// Pop
unset($players[1]);
echo "<pre>";
print_r($players);
echo "</pre><br/>";