<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$obj = json_decode( //Принимает закодированную в JSON строку и преобразует ее в переменную PHP
$json, //строка формата json
false, // не буду преобразовывать в ассоцииативный массив
512, // глубина рекурсии
JSON_BIGINT_AS_STRING); // Битовая маска опций декодирования JSON
//позволяет конвертировать большие целые в строки, а не в рациональные (float) числа
echo $obj->d;
?>