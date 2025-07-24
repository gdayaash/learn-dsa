<?php
$myarr = [1,3,5,6,5,7,8,9,8,10,12,10];

//Find the Duplicate in the array
$dup = [];

$length = 0;

foreach($myarr as $x){
    $length++;
}

for($i=0; $i <= $length-1; $i++){
    $tmp = $myarr[$i];
    for($j=1; $j <= $length-1; $j++){
        $ctemp = $myarr[$j];
        if($tmp === $ctemp){
            $dup[]=$myarr[$i];
        }
    }
}



print_r($dup);





?>