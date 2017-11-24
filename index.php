<?php
$array = [12, 3435, 'trade', 47, 87, 22, 'Nikon', 71, 'yellow', 48, 'bitter'];

$funcOdd = function ($var) {
    for ($i = 0; $i < (count($var)); $i++) {
        // является ли элемент массива нечетным
        if ($var[$i] % 2 !== 0) {
            $result[] = $var[$i];
        }
    }
    return $result;
};

$funcEven = function ($var) {
    for ($i = 0; $i < (count($var)); $i++) {
        // является ли элемент массива четным
        if ($var[$i] % 2 == 0) {
            $result[] = $var[$i];
        }
    }
    return $result;
};

function arrayToInt($array1, $callback = null)
{
    // В новый массив помещаем только числовые значения
    for ($i = 0; $i < count($array1); $i++) {
        If (is_numeric($array1[$i])) {
            $result[] = $array1 [$i];
        }
    }

    //Проверяем является ли переданный параметр функцией.
    if (is_callable($callback)) {
        //Вызываем переданную пользовательскую функцию и возвращаем обработанные данные
        $result = call_user_func($callback, $result);
    }
    return $result;
}

echo('Исходный массив <br>');
var_dump($array);
echo('<br><br> Массив состоящий только из чисел (фильтр исходного)<br>');
var_dump(arrayToInt($array));
echo('<br><br> Нечётные числа массива <br>');
var_dump(arrayToInt($array, $funcOdd));
echo('<br><br> Чётные числа массива <br>');
var_dump(arrayToInt($array, $funcEven));
?>