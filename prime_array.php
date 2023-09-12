<?php
$numbers = [2, 3, 4, 8, 15, 18, 13, 17, 19, 28];

echo "Prime numbers in the array are: ";
foreach ($numbers as $number) {
    $Prime_num = true;

    if ($number <= 1) {
        $Prime_num = false;
    } else {
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                $Prime_num = false;
                break;
            }
        }
    }

    if ($Prime_num) {
        echo $number . " ";
    }
}
?>
