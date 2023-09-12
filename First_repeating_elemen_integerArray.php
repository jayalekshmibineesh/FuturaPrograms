<?php
$arr = [1, 2, 6, 5, 3, 6, 6, 5];
$n = count($arr);

for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$i] == $arr[$j]) {
            echo $arr[$i];
            exit; // Exit the script when a repeating integer is found
        }
    }
}

// If no repeating integer is found
echo "No repeating integer found\n";
?>
