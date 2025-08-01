<?php
// Create a Counter with Closure Function 

function counter(){
    $num = 1;
    return function() use (&$num){
        $num++;
        echo "Look After the Count " .$num ."\n"; 
    };
};

$add = counter();

$add();
$add();
$add();
?>