<?php
function count_character($string, $target) {
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == $target) {
            $count++;
        }
    }
    return $count;
}

$string = "geeksforgeeks";
$target = 'e';
echo count_character($string, $target);
?>