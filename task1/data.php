<?php

// === Задание #1 ===

$name = 'Сергей';
$age =  '34';

// === Задание #2 ===

const PICS_SUM = 80;
const MARKERS_PICS_AMT = 23;
const PENCIL_PICS_AMT = 40;

// === Задание #3 ===

function howOldAreYou() {
    $age = rand(-999, 999);  
    echo "Вам $age? ";
    if ($age >= 18 && $age <= 65) {
        echo "Вам еще работать и работать \n";
    } elseif ($age > 65) {
        echo "Вам пора на пенсию \n";
    } elseif ($age >= 1 && $age <= 17) {
        echo "Вам еще рано работать \n";
    } else {
        echo "Неизвестный возраст \n";
    }
} 

// === Задание #4 ===
$day = rand(-10, 10);

function isWhatDay($day)
{
    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Это рабочий день \n";
            break;
        case 6:
        case 7:
            echo "Это выходной день \n";
            break;
        default:
            echo "Неизвестный день \n";
    }
}

// === Задание #5 ===
$bmw = [
    'model' => "X5", 
    'speed' => 120, 
    'doors' => 5, 
    'year' => "2015"
];

$toyota = [
    'model' => "Corolla", 
    'speed' => 120, 
    'doors' => 5, 
    'year' => "2009"
];

$opel = [
    'model' => "Astra", 
    'speed' => 130, 
    'doors' => 3, 
    'year' => "2010"
];

// === Задание #6 ===