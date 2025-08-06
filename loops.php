<?php
//Loops in PHP
#While Loop
$i=0;
while($i<5){
    echo "The number is: $i<br>";
    $i++;
}
$num=5;
$j=1;
while($j<=10){
    echo "The Table of number is: $num x $j = " . ($num * $j) . "<br>";
    $j++;
}
#Do-While Loop
$k=1;
do {
    echo "The number is: $k<br>";
    $k++;
} while ($k <= 5);

// For Loop
for($i=0; $i < 30; $i++) {
    if($i % 2 == 0) {
       echo "The number is: $i<br>";
    } 
    
}

$num = 5;
$fact = 1;
for($i=1; $i<=$num; $i++){
    $fact *= $i;
}
echo "The factorial of $num is $fact";

// Foreach Loop
$cars= array("Volvo", "BMW", "Toyota");
foreach($cars as $car) {
    echo "Car: $car<br>";
}
// Associative Array with Foreach
$myself= array("name" => "Usman", "age" => 22, "city" => "Kot Fateh khan");
foreach($myself as $x => $y)
{
    echo "$x: $y<br>";
}
?>