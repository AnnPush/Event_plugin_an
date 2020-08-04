<?php
$gamburger = 4.95;
$koktel1 = 1.95;
$cola = 0.85;

$c_tip = 0.16;
$c_tax = 0.075;

$food = 2 * $gamburger + $koktel1 + $cola;
$tip = $food * $c_tip;
$tax = $food * $c_tax;

$summa = $food + $tip + $tax;
//print 'Summa: ' . $summa;

printf("%d %-9s %.2f cost: %5.2f\n", 2, 'Gamburger',
$gamburger, 2 * $gamburger);
printf("%d %-9s %.2f cost: %5.2f\n", 1, 'Koktel1',
$koktel1, $koktel1);
printf("%d %-9s %.2f cost: %5.2f\n", 1, 'Cola',
$cola, $cola);
printf("%25s: %5.2f\n", 'Food summa', $food);
printf("%25s: %5.2f\n", 'Food and Tax summa', $food + $tax);
printf("%25s: %5.2f\n", 'Food, Tax, and Tip summa', $summa);
?>
