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
print 'Summa: ' . $summa;
?>
