<?php
$arr = array (5, 3, 7, 4, 2);
$max = $arr[0];
$min = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}

echo "Maximum is: " . $max;
echo "Minimum is: " . $min;
?>