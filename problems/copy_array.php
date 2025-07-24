<?php

//Copy the array1 element to array2 in reverse without Pre-defined Functions.


$array1 = [1,2,4,5,6,7,8,9,11];

$array2 = [];

// process 

// First Count the array 

$lengthofArray = 0;

foreach($array1 as $value){
    $lengthofArray++;
}

for($i = $lengthofArray - 1; $i >=0; $i--){
    $array2[]= $array1[$i];
}

print_r($array2);

?>