<?php
// Arithematic Operators
$a = 5;
$b = 6;
$c="5";
$sum = $a + $b;
echo "The sum is: $sum <br>";
// Comparison Operators
if ($a == $b) {
    echo "Equal.<br>";
} else {
    echo "Not equal.<br>";
}
// Logical Operators
if ($a > 0 && $b > 0) {
    echo "Both are positive.<br>";
} else {
    echo "At least one number is not positive.<br>";
}
// Assignment Operators
$c = $a; // Assigns the value of $a to $c
echo "The value of c is: $c <br>";
// Increment/Decrement Operators
$a++;
echo "After incrementing, a is: $a <br>";
$b--; 
echo "After decrementing, b is: $b <br>";
// String Operators
$firstName = "Usman";
$lastName = "Ahmed";
$fullName = $firstName . " " . $lastName; // Concatenation
echo "Full name is: $fullName <br>";
// Ternary Operator
$age = 22;
$isAdult = ($age >= 18) ? "Adult" : "Minor";
echo "You are an $isAdult.<br>";
// Null Coalescing Operator
$nickname = null;
$displayName = $nickname ?? "Guest"; // If $nickname is null, it will use "Guest"
echo "Display name is: $displayName <br>";

//Identity Operator
if ($a === $c) {
    echo "Idetical.<br>";
} else {
    echo "Not Identical.<br>";
}

?>