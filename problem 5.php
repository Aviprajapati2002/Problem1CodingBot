<?php
$a = 10;
$b = 50;

// Swap two numbers without using a third variable
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Strings after swap: a = $a and b = $b";
?>