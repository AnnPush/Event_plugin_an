/*Видоизмените выполнение задания в первом упражнении таким образом, чтобы таблица со-
держала также строки с общим населением каждого штата, упомянутого в перечне самых
крупных городов США.*/

<?php
$enumeration = [['New York', 'New York', 8175133],
['Los Angeles', 'California', 3792621],
['Chicago', 'Illinois', 2695598],
['Houston', 'Texas', 2100263],
['Philadelphia', 'Pennsylvania', 1526006],
['Phoenix', 'Arizona', 1445632],
['San Antonio', 'Texas', 1327407],
['San Diego', 'California',1307402],
['Dallas', 'Texas', 1197816],
['San Jose', 'California', 945942]];

print "<table>\n";
print "<tr><th>City</th><th>People</th></tr>\n";

$summa = 0;
$sum_state = array();

foreach($enumeration as $city_dan)
{
	$summa += $city_dan[2];
	if (! array_key_exists($city_dan[1], $sum_state))
	{
        $sum_state[$city_dan[1]] = 0;
    }
    
    $sum_state[$city_dan[1]] += $city_dan[2];
    print "<tr><td>$city_dan[0], $city_dan[1]</td><td> $city_dan[2]</td></tr>\n";
}

print "\n<tr><td>Summa</td><td>$summa</td></tr>\n\n";
print "</table>";
print "<table>\n";
print "<tr><th>State</th><th>People</th></tr>\n";
foreach ($sum_state as $state => $people)
{
   print "<tr><td>$state</td><td>$people</td></tr>\n";
}
print "</table>\n";
?>
