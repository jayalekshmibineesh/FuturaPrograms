<?php
$n = 7;
$string = "";

for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $string .= " ";
    }

    for ($k = 0; $k < 2 * ($n - $i) - 1; $k++) {
        $string .= "*";
    }

    $string .= "<br>";
}

echo "<pre>" . $string . "</pre>";
?>
