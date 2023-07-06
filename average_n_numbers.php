<?php
$n = 0;
$count = 1;
$x = 0;
$average = 0;
$sum = 0;

echo "How many Numbers? ";
$n = intval(readline());

while ($count <= $n) {
    echo "x = ";
    $x = floatval(readline());
    $sum += $x;
    ++$count;
}
$average = $sum / $n;
echo "\nThe Average is $average\n";
?>
