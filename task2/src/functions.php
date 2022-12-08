<?php

// task1
$strings = ['массив', 'строк', 'выводит', 'OK'];

function task1(array $array, bool $return = true)
{
    $result = implode("", array_map(function (string $string) {
        return "<p>$string</p>";
    }, $array));

    if ($return) {
        return $result;
    }

    echo $result;
}

// task2
function calculateItNow(string $operator, ...$nums)
{    
    $expression = implode($operator, $nums);

    foreach ($nums as $num) {
        if (!is_int($num) && !is_float($num)) {
            return "Походу $num не число";
        }
    }

    switch ($operator) {
        case '+':
            $result = array_sum($nums);
            break;
        case '-':
            $result = current($nums) - array_sum(array_slice($nums,1));
            break;
        case '*':
            $result = array_product($nums);
            break;
        case '/':
            foreach ($nums as $num => $val) {
                if ($val == 0) {
                    echo 'Ты че, нельзя же на ноль делить!';
                    return;
                }
            }
            $result = number_format(1 / array_product($nums), 4);
            break;
        default:
            return 'Проверь оператор - ты чёт не то нажал...';
    }

    return $expression . ' = ' . $result;
}

// task3
function multTable($param1, $param2)
{
    if (!is_int($param1) || $param1 == 0) {
        return 'Аргументы должны быть целыми числами';
    }
    
    if (!is_int($param2) || $param2 == 0) {
        return 'Аргументы должны быть целыми числами';
    }
    $result = '<table>';
    for ($i = 1; $i <= $param1; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $param2; $j++) {
            $m = $j * $i;
            $result .= '<td style="width: 30px">' . $m;
        } 
        $result .= '</tr>';
    }
    $result .= '</table>';
    return $result;
}

// task4
function whatTimeIsNow()
{
    return date('d.m.Y H:i');
}

// task5
function remover(string $string, string $letter)
{
    return implode('',explode($letter, $string));
}

function replacer(string $string, string $subsrting, string $replacement)
{
    return str_replace($subsrting, $replacement, $string);
}

// task6
function get_content(string $file)
{
    $fp = fopen($file, 'r');
    if (!$fp) {
        return 'File cannot be opened or not exist';
    }
    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    fclose($fp);
    echo $str;
}