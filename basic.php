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

//do-while-loop

$i=0;

do{
  echo "Thank you for assisting us; Please Wait";
  $i++;
}while($i == 2);

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


// PHP Functions 

function greet($x){
  echo $x ."Hello 🙌";
}

// Referencing a Variable inside the function with "&" ;

function refered(&$x){
  $x *= 5;
  echo $x;
}

$num = 5;
refered($num); //Output: 25


//Variatic Function

// This function receives unknown number of arguments 
// This function becomes an argument
// THis Argument should be the last argument if it is combined and gave with two arguments (e.g)=> function add($x, ...$y)

function addMultiple(...$result){
  $x = 0;
  $length = count($result);
  for($i=0; $i <= $length; $i++){
    $x *= $result[$i];
  }
  echo $x;
  return $x;
}

addMultiple(5,6,7,8,10,5);


// Array 

// Adding items to Indexed Array

$fruits = ["Apple", "Orange"];

$fruits[1]= "Pineapple";
array_push($fruits, "Bannana");

// Associative Array

//For associative arrays array_push(); cannot be used;

//Instead we can use array_merge();



$vegetables = ["Name"=>"Dayaash", "Age"=>24];

$vegetables += [
  "Area" => "SS COLONY"
];

unset($vegetables["Name"]);




// PHP OOPS 

class fruit {
  
  //Properties
  public $name;
  public $color;

  //Methods
  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }


}  

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();

echo $banana->get_name();



?>



