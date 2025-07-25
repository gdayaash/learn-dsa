
<?php
function greet($x){
  echo $x ." Hello 🙌";
}

greet("Ghayz");

echo "\n";
echo "\n";
echo "\n";

function refered(&$x){
  $x *= 5;
  echo $x;
}

$num = 5;
refered($num);

echo "\n";
echo "\n";
echo "\n";

function addMultiple(...$result){
  $x = 1;
  $length = count($result) - 1;
  for($i=0; $i <= $length; $i++){
    $x *= $result[$i];
  }
  return $x;
}

$a = addMultiple(5,6,7,8,10,5);
echo $a;

echo "\n";
echo "\n";
echo "\n";


$z = 0;

do{
  echo "Thank you for assisting us: Please Wait";
  $z++;
}while($z == 2);


echo "\n";
echo "\n";
echo "\n";

$fruits = ["Apple", "Orange"];

array_push($fruits, "Bannana");

// print_r($fruits);

echo "\n";
echo "\n";

// $vegetables = ["Name"=>"Dayaash", "Age"=>24];

// array_push($vegetables, "Area"=> "SS Colony");

$vegetables = ["Name"=>"Dayaash", "Age"=>24];

$vegetables += [
  "Area" => "SS COLONY"
];

// unset($vegetables["Name"]);

// print_r($vegetables);


$multi = [[1,2,3],[4,5,6 => ["fav"=> "fruits"]],["Name"=>"Ajith", "Age"=>55]];

$multi[1][6]["fav"] = "Chicken";

print_r($multi[1][6]["fav"]);
// unset($multi[1][6]["fav"]);

echo "\n";
echo "\n";
print_r($multi);




?>