<?php

// task1
const NAMES = ['Nick', 'Dick', 'Rick', 'Nancy'];

function userCreator($names)
{
    $persName = $names[array_rand($names)];
    foreach ($names as $key => $name) {
        if ($persName == $name) {
            $id = $key+1; // id = 0 нам не нужен
        }
    }
    return ['id' =>$id, 'name' =>$persName, 'age' => rand(18, 45)];
}

function averageAgeCounter(array $users)
{
    $totalAge = 0;
    foreach ($users as $user) {
        $totalAge += $user['age'];
    }
    return $totalAge / count($users);
}