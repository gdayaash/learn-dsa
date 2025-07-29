<?php

$i = 0;
while($i < 100){
    if($i % 3 === 0 & $i % 5 === 0){
        echo "Fizz Buzz \n";
    }elseif($i % 3 === 0){
        echo "Fizz \n";
    }elseif($i % 5 === 0){
        echo "Buzz \n";
    }else{
        echo $i ."\n";
    }
}









?>