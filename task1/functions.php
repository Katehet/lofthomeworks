<?php

// === Задание #1 ===
require_once ('data.php');

echo "<pre>";
echo "Меня зовут: $name \n";
echo "Мне $age года \n";
echo "\"!|/'\"\\ \n <br>";

// === Задание #2 ===
$paintPics = PICS_SUM - MARKERS_PICS_AMT - PENCIL_PICS_AMT;
echo "На выставке " . $paintPics . " рисунков красками <br>";

// === Задание #3 ===
echo "<br>";
howOldAreYou();

// === Задание #4 ===
echo "<br>";
echo "День недели: $day-й. ";
isWhatDay($day);

// === Задание #5 ===
echo "<br>";

$cars = ["BMW" => $bmw, "Toyota" => $toyota, "Opel" => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name <br>";
    echo "$car[model] $car[speed] $car[doors] $car[year] <br> \n";
}

// === Задание #6 ===
echo "<table>";
for ($row = 1; $row <= 10; $row++) { 
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        $product = $row * $col;
        // Чет или нечет должны быть оба индекса одновременно
        if (!($row % 2) && !($col % 2)) { // Если остатка от деления на 2 нет, число четное
            echo "<td width='30'; align='center'>($product)";
        } elseif ($row % 2 && $col % 2) { // Если есть остаток, число нечетное
            echo "<td width='30'; align='center'>[$product]";
        } else {
            echo "<td width='30'; align='center'>$product";
        }
    } 
}