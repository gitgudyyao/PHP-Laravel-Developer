<?php

/*
Write a function($s) that takes in a String. Find the character that repeats the least
and most times. If there are multiple characters having the same frequency, return
the one that is alphabetically bigger.
To compare alphabets, ‘c’ is bigger than ‘a’. ‘h’ is smaller than ‘p’.
Example:
Let’s say we have a String $s = ‘embezzlement’.
Result:
Most times = ‘e’, because ‘e’ occurs 4 times.
Least times = ‘b’, ‘l’, ‘n’, ‘t’ occurs 1 time each, but the answer is ‘t’ because ‘t’ is
alphabetically bigger than the rest.
*/

$string = "embezzlement";  
$freq = array();  
$minChar = $maxChar = $string[0];          
   
//Count each word in given string and store in array freq  
for($i = 0; $i < strlen($string); $i++) {  
    array_push($freq, 1);  
    for($j = $i+1; $j < strlen($string); $j++) {  
        if($string[$i] == $string[$j] && $string[$i] != ' ' && $string[$i] != '0') {  
            $freq[$i]++;  
              
            //Set $string[$j] to 0 to avoid printing visited character  
            $string[$j] = '0';  
        }  
    }  
}  
   
//Determine minimum and maximum occurring characters  
$min = $max = $freq[0];  
for($i = 0; $i < count($freq); $i++) {  
      
    //If min is greater than frequency of a character   
    //then, store frequency in min and corresponding character in minChar  
if($min >= $freq[$i] && $freq[$i] != '0') {  
    $min = $freq[$i];  
    $minChar = $string[$i];  
}  
//If max is less than frequency of a character   
//then, store frequency in max and corresponding character in maxChar  
if($freq[$i] >= $max ) {  
    $max = $freq[$i];  
    $maxChar = $string[$i];  
}  
}  
   
print("Least time: " . $minChar);  
print("<br>Most Time: " . $maxChar);  
?>  
