<?php

$users = [
    [
        'name' => 'Lebron James',
        'age' => 39,
        'gender' => 'Male'
    ],
    [
        'name' => 'Jennifer Lawrence',
        'age' => 33,
        'gender' => 'Female'
    ],
    [
        'name' => 'Awra Briguela',
        'age' => 17,
    ],
];

foreach ($users as $key => $user) {
    $classification = $user['age'] >= 18 ? 'Adult' : 'Minor';
    $gender = $user['gender'] ?? 'Undefined';
    echo "Name: {$user['name']} <br/>";
    echo "Age: {$user['age']} <br/>";
    echo "Classification: $classification <br/>";
    echo "Gender: $gender <br/>";
    if($key+1 < count($users)) { 
        echo "--------------- <br/>";
    }
}
