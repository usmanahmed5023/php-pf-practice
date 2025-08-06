<?php
// PHP VARIABLES 

$name="Usman Ahmed";
$age=22;

echo "My name is $name and I am $age years old.<br>";

$height=5.7;
echo "I am $height feet tall.<br>";
 $isStudent = true;

if ($isStudent) {
    echo "I am a student.";
} else {
    echo "I am not a student.";
}

# Assigning a new value to the variable
$age = 23;  
echo "<br>Next year, I will be $age years old.<br>";

// its a losey type language how?

$a=5;
$b="10";
$c = $a + $b; // PHP will convert $b to an integer
echo "The sum of $a and $b is $c.<br>"; 

// Printing data types
echo "Name: " . gettype($name) . "<br>";

# we can also use var_dump() to see the type and value
var_dump($age);
var_dump($height);