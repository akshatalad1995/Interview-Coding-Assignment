<?php
function convert_dec_to_bin($n) 
{ 
    // array to store 
    // binary number 
    $binaryNum; 
  
    // counter for binary array 
    $i = 0; 
    while ($n > 0)  
    { 
  
        // storing remainder 
        // in binary array 
        $binaryNum[$i] = $n % 2; 
        $n = (int)($n / 2); 
        $i++; 
    } 
  
    // printing binary array 
    // in reverse order 
    for ($j = $i - 1; $j >= 0; $j--) 
        echo $binaryNum[$j]; 
} 

$n = 15; 
convert_dec_to_bin($n); 

?>