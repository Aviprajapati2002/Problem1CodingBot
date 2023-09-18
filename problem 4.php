<?php
$a = "Hello";
$b = "World";

// Swap two strings without using a third variable
$a = $a . $b;
$b = substr($a, 0, strlen($a) - strlen($b));
$a = substr($a, strlen($b));

echo "Strings after swap: a = $a and b = $b";
?>