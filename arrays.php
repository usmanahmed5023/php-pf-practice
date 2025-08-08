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
echo  $Info['Name'] . "<br>";

//Multidimensional Arrays
$Students=array(
    array("Usman", 22, "Kot Fateh Khan"),
    array("Ahmed", 23, "Lahore"),
    array("Ali", 21, "Karachi")
);
echo "<table border='1'>";
echo "<tr>
<th>Name</th>
<th>Age</th>
<th>City</th>
</tr>";
foreach($Students as $x){
    echo "<tr>";
    foreach($x as $y){
        echo "<td>$y</td>";
    }
    echo "</tr>";
}

?>