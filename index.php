<?php
//$array = [2, 124, 12, 67, 'Number'=>58, 11, 12, 15, 11, 12, 23, 45];
//asort($array, SORT_NUMERIC);
//If (array_key_exists('Number', $array)) {
//    echo 'Массив содержит ключ Number';
//};
//var_dump(array_key_exists('Number', $array));
//$result=array_unique($array);
//var_dump($array);
//echo '</br>';
//var_dump($result);
//echo '</br>';
//var_dump(array_values($result));
//$text = "Текст  \n";

//$fr = fopen("file.txt","w");
//fwrite($fr,$text);
//fclose($fr);
//file_put_contents("file.txt","<p>Текст1</p>",FILE_APPEND | LOCK_EX);
//file_put_contents("file1.txt","Текст2  ",FILE_APPEND | LOCK_EX);
//echo(file_get_contents("file.txt"));
$fileName = "example.txt";
$fileDate = "<p>Мой текст</p>";
$rights = "a+"; 
/**
 * Put date to some file with some rights
 * @param string $fileName
 * @param $fileDate
 * @param string (optional) $rights
 * @return bool
 */
function filePutContent($fileName, $fileDate, $rights = "w")
{
    $fp = fopen($fileName, $rights);
    fwrite($fp, $fileDate);
    fclose($fp);
    return true;
}

if (filePutContent($fileName, $fileDate/*,$rights*/)) {
    echo 'Save complite';
} else {
    echo "Save failed";
};
?>