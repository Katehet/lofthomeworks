<?php

require('src/functions.php');

// Task 1
task1($strings, false);

// Task 2
$result_ops = calculateItNow('*', 1, 2, 3, 9, 8, 7);

print $result_ops;
print '<p>';

// Task 3
$table = multTable(5, 3);
print $table;
print '<p>';

// Task 4
$time = whatTimeIsNow();
print 'Right now is ' . $time;
print '<p>';
print strtotime('24.02.2016 00:00:00');
print '<p>';

// Task 5
$str1 = 'Карл у Клары украл Кораллы';
$letter = 'К';
$str2 = 'Две бутылки лимонада';
$num_of_bottles = 'Три';

var_export($rslt = remover($str1, $letter));
print '<p>';
var_export($rslt = replacer($str2, 'Две', $num_of_bottles));
print '<p>';

// Task 6
$filename = 'test.txt';
$str_to_write = 'Hello again!';
file_put_contents($filename, $str_to_write);
get_content($filename);
