<?php
$a = array(4, 9, 5, 6, 9, 3, 8, 8, 5);
$len = count($a);
echo "Elements in the array are:\n <br>";
for ($i = 0; $i < $len; $i++) {
    echo "$a[$i] &nbsp;";
}
echo "<br> Duplicate elements in the array are:\n";
for ($i = 0; $i < $len; $i++) {
    for ($j = $i + 1; $j < $len; $j++) {
        if ($a[$i] == $a[$j])
            echo "$a[$j] ";
    }
}
?>