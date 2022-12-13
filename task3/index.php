<?php

require('src/functions.php');

for ($i = 0; $i < 50; $i++) {
    $users[] = userCreator(NAMES);
}

file_put_contents('users.json', json_encode($users));

$data = file_get_contents('users.json');
$decodedUsers = json_decode($data, true);

$ageStat = averageAgeCounter($users);
$nameStat = (array_count_values(array_column($users, 'name')));

foreach ($nameStat as $name => $amount) {
    echo $amount . ' users have name ' . $name . '<br>';
}

print("<p>");
echo "Average age of users is " . round($ageStat, 2) . " years old";