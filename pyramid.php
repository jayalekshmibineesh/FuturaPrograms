<?php
$n = 5;
$string = "";

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j < $n - $i; $j++) {
        $string .= " ";
    }
    for ($k = 0; $k < 2 * $i - 1; $k++) {
        $string .= "*";
    }
    $string .= "</br>";
}

echo "<pre>" . $string . "</pre>";
?>
