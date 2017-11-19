<?php
//Задача 2: Реализуйте функцию вывода положительных значений массива кратных «5».
$array = [12, -5, 234, -10, 10, 45, 46, 9, 3, 7, 1, 15, 0];
echo "Исходный массив:</br>";
foreach ($array as $value) {
    echo "$value</br>";
}
echo "Значения положительные и кратные 5:</br>";
arrayCountAliquot($array, 5);
function arrayCountAliquot($array, $multiplicity)
{
    foreach ($array as $value) {
        If ((($value % $multiplicity) == 0) and ($value >= 0)) {
            echo "$value</br>";
        }
    }
    return true;
}


?>