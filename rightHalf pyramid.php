<?php
    $n = 10;
    $string = "";

    for ($i = 1; $i < $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $string .= "*";
        }
        $string .= "<br>";
    }

    echo $string;
?>
