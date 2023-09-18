<?php
function is_palindrome($string) {
    $string = strtolower($string);
    $length = strlen($string);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] != $string[$length - $i - 1]) {
            return false;
        }
    }
    return true;
}

$string = "anna";
if (is_palindrome($string)) {
    echo "true";
} else {
    echo "false";
}
?>
