<?php

// Stage 1 

$myarray = array(1,2,4,2,7,1);

print_r($myarray);

echo"\n";

echo count($myarray); 

echo"\n";
echo"\n";



for($i=0; $i < count($myarray); $i++){
    echo($myarray[$i]);
}

echo"\n";
echo"\n";



echo($myarray[0]);

//Stage 2

$target = array(1,2,4,2,7,1);

for($i=0; $i < count($target); $i++){
    // echo($target[$i]);
    
    $temp = $target[$i];
    
    if($temp === $target[0] ||
       $temp === $target[1] || 
       $temp === $target[2] || 
       $temp === $target[3] || 
       $temp === $target[4] || 
       $temp === $target[5] || 
       $temp === $target[6] ){
           $filteredOne = array();
           array_push($filteredOne, $temp);
           print_r($filteredOne);
       }
}

//stage 3

$target = array(1,2,4,2,7,1);
$result = array();

for($i=0; $i < count($target); $i++){
    // echo($target[$i]);
    
    $temp = $target[$i]; 
    
    for($j=1; $j < count($target); $j++){
        
        $compare = $target[$j];
        
        if($temp === $compare){
            array_push($result, $compare);
            print_r($result);
        }else{
            break;
        }
    }
    
}

//stage 4

$target = array(1, 2, 4, 2, 7, 1);
$result = array();

for ($i = 0; $i < count($target); $i++) {
    $temp = $target[$i];

    for ($j = 0; $j < count($target); $j++) {
        if ($i !== $j && $temp === $target[$j]) {
            if (!in_array($temp, $result)) {
                $result[] = $temp;
            }
            break; 
        }
    }
}

print_r($result);

?>