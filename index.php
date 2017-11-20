<?php
//Инициализируйте массив с целочисленными значениями.
//Реализуйте функцию записи положительных и отрицательных значений в разные файлы использую оператор *switch*
$array = [12, -5, 234, -10, 10, 45, 46, 9, 3, 7, 1, 15, 0];
var_dump($array);
echo "<br/>";
for ($i = 0; $i < (count($array)); $i++) {

    for ($j = 0; ($j < (count($array)  - $i)); $j++) {
//        echo $j . '  ';
     /*   echo $array[count($array) - $j] . '  ';*/
        if ($array[$j] < $array[$j - 1]) {
            $pr = $array[$j];
            $array[$j] = $array[$j - 1];
            $array[$j - 1] = $pr;
        }
//        echo (count($array) - 1 - $j) . '  ';
//        if ($array[$j] > $array[$j + 1]) {
//            $b = $array[$j];
//            $array[$j] = $array[$j - 1];
//            $array[$j - 1] = $b;
//        }
//        echo "<br/>";
    }
   /* echo "<br/>";*/
}

var_dump($array);

?>