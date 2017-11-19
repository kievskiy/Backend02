<?php
//Инициализируйте массив с целочисленными значениями.
//Реализуйте функцию записи положительных и отрицательных значений в разные файлы использую оператор *switch*
$array = [12, -5, 234, -10, 10, 45, 46, 9, 3, 7, 1, 15, 0];
echo "Исходный массив:</br>";
foreach ($array as $value) {
    echo "$value</br>";
}

arrayInTwoFiles($array);
function arrayInTwoFiles($array)
{
    file_put_contents('positive.txt', '');
    file_put_contents('negative.txt', '');

    foreach ($array as $value) {
        switch ($value < 0) {
            case true:
                file_put_contents('negative.txt', $value . '  ', FILE_APPEND | LOCK_EX);
                break;
            case false:
                file_put_contents('positive.txt', $value . '  ', FILE_APPEND | LOCK_EX);
                break;
        }
    }
    return true;
}

echo('Положительные элементы массима  ' . file_get_contents('positive.txt'));

echo('   Отрицательные  элементы массима  ' . file_get_contents('negative.txt'));

?>