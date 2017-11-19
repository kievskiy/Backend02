<?php
//Задача 2: Реализуйте функцию вывода положительных значений массива кратных «5».
$array = [12, 234, 10, 45, 9, 3, 7, 1, 15, 0];

//foreach ($array as $value) {
//    If (($value % 5) == 0) {
//        echo "$value</br>";
//    }
//}
echo arrayCountAliquot($array);
function arrayCountAliquot($array)
{
    $CountAliquot = 0;
    foreach ($array as $value) {
        If (($value % 5) == 0) {
            $CountAliquot++;
        }
        unset($value);
        return $CountAliquot;
    }

}

?>