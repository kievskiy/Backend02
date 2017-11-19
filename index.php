<?php
//Задача 2: Реализуйте функцию вывода положительных значений массива кратных «5».
$array = [12, 234, 10, 45, 9, 3, 7, 1, 15, 0];
echo arrayCountAliquot($array, 5);
function arrayCountAliquot($array, $multiplicity)
{
    $CountAliquot = 0;
    foreach ($array as $value) {
        echo "$value</br>";
        If (($value % $multiplicity) === 0) {
//            echo "$value</br>";
            $CountAliquot++;
        }
        return $CountAliquot;
    }
}





?>