<?php
$n = 10;
$string = "";

for ($i = 0; $i <= $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $string .= " ";
    }
    for ($k = 0; $k <= $n - $i; $k++) {
        $string .= "*";
    }
    $string .= "\n";
}

echo "<pre>" . $string . "</pre>";
?>
  