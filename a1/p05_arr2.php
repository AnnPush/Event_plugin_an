/*Видоизмените выполнение задания в предыдущем упражнении таким образом, чтобы строки
в результирующей таблице были упорядочены сначала по населению, а затем по названиям
городов.*/


<?php
$enumeration = ['New York' => 8175133,
'Los Angeles' => 3792621,
'Chicago' => 2695598,
'Houston' => 2100263,
'Philadelphia' => 1526006,
'Phoenix' => 1445632,
'San Antonio' => 1327407,
'San Diego' => 1307402,
'Dallas' => 1197816,
'San Jose' => 945942];

print "<table>\n";
print "<tr><th>City</th><th>People</th></tr>\n";

//по значению сортировка
asort($enumeration);

$summa = 0;

foreach($enumeration as $city =>$people)
{
	$summa += $people;
	print "<tr><td>$city</td><td>$people</td></tr>\n";
}
print "<tr><td>Summa</td><td>$summa</td></tr>\n";
print "</table>";


print "<table>\n";
print "<tr><th>City</th><th>People</th></tr>\n";

//сортировка по ключу
ksort($enumeration);

$summa = 0;

foreach($enumeration as $city =>$people)
{
	$summa += $people;
	print "<tr><td>$city</td><td>$people</td></tr>\n";
}
print "<tr><td>Summa</td><td>$summa</td></tr>\n";
print "</table>";
?>
