<?php
//Задача 1: Реализуйте функцию подсчета количества элементов в массиве.
$array = [12, 234, 'value', 45, 9, 3, 7, 1, 0];
function arrayElementCount($array)
{
    $array_count = 0;
    foreach ($array as $value) {
        $array_count++;
    }
    return $array_count;
}
echo arrayElementCount($array);

?>