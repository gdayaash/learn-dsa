<?php

// Assigning String 

$myName = "Dayaash";

echo "$myName is a good boy <br>";

// Concatenation 

echo "You need to improve " . $myName ."<br>";

// Indexed Array 

$arrayCountry = array('INDIA', 'Australia', 'AMERICA', 'KOOMAPATTI');

print_r($arrayCountry);

//Associative Array

$countryPlace = array(
    "First_Prize" => "KOOMAPATTI",
    "Second_Prize" => "INDIA",
    "Third_Prize" => "Australia"
);

print_r("$countryPlace \n");


echo "<br>";
// var_dump($countryPlace); 

echo "<br>";

// printing First ELement of Associative Array 
echo ($countryPlace["First_Prize"]);

echo "<br>";
echo "<br>";

// while loop

$i = 5;
while ($i >= 1) {
  echo "Count: $i <br>";
  $i--;
}

// Types of Printing output in php 

$some = "All is Well";
$num = 5;

echo "$some Hi, How are You <br>";
print($some);
echo "<br>";
printf('Hey, How are You %s', $some);
echo "<br>";
printf('Hey, How are You %s %d', $some, $num);

echo "<br>";

//Global Variable

$y = 5;

function add($z){
  global $y;
  echo $y + $z;
}

add(5);

echo "<br>";

echo add(5);




?>

