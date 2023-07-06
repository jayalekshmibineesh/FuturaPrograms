<?php
function Palindrome($String) {
  $revString = strrev($String);
  if ($revString == $String){
    echo $String." is a Palindrome string.\n";
  } else {
    echo $String." is not a Palindrome string.\n";
  }
}

Palindrome("malayalam");
?>