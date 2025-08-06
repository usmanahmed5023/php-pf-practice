<?php
//PHP Arrays

$UserName=array("Usman","Ahmed","Ali");
array_push($UserName,"Arsalan");
$UserName[2]="sardar";
foreach($UserName as $name){
    echo "The usernames are $name <br>";
}
//Associative Arrays
$Info=array("Name" => "Usman Ahmed", "RegNo" => "043", "Address" => "Kot Fateh Khan");
 foreach($Info as $x => $y){
    echo "$x => $y <br>";
}
echo $Info['Name'];
?>