<?php
     
    function SecondHighest(array $newarray){
     rsort($newarray);
    $secondHighestElement = $newarray[1];
    return $secondHighestElement;
    }
    $arr = array(64, 34, 75, 12, 45, 11, 90);
     echo "Second highest number in the  given array : ".SecondHighest($arr);
?>