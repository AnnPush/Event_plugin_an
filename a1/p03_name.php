/*Напишите на РНР программу, задающую имя в переменной $first_name 
и фамилию в пе- ременной $last_name. Выведите символьную строку,
содержащую имя и фамилию, разделив их пробелом. Кроме того, 
выведите длину этой символьной строки. */

<?php
$first_name = 'Jack';
$last_name = 'Nill';
$str = "$first_name $last_name";

//print 'Name: ' . $first_name . ' ' . $last_name;
print 'Name: ' . $str . "\n";
print 'Length: ' . strlen($str);
?>
