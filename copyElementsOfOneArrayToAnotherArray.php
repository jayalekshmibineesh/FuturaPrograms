<?php     
$arr1 = array(1, 2, 3, 4, 5);   

$arr2 = array();      
for ($i = 0; $i < count($arr1); $i++) //Copying all elements of the first array into second array  
{   
    $arr2[$i] = $arr1[$i];   
}    
  
print("Elements of original array: <br>");  
for ($i = 0; $i < count($arr1); $i++) {   
   print($arr1[$i] . " ");  
}   
   
print("<br>");    
print("Elements of new array: <br>");  
for ($i = 0; $i < count($arr2); $i++) {   
   print($arr2[$i] . " ");  
}   
?>  
</body>  
</html>  
