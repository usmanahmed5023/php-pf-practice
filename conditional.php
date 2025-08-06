<?php
// Conditional Statements in PHP
$age = 20;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}
// Using switch statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo " Monday<br>";
        break;
    case "Friday":
        echo " Friday<br>";
        break;
    default:
        echo "Weekend.<br>";
}
// using if-else with logical operators

$marks=80;
if($marks >= 85) {
    echo "Grade: A<br>";
} elseif($marks >= 75 && $marks < 85) {
    echo "Grade: B<br>";
} elseif($marks >= 60 && $marks < 75) {
    echo "Grade: C<br>";
} else {
    echo "Grade: D<br>";
}
$temperature = 30;
$humidity = 70;
if ($temperature > 25 || $humidity > 60) {
    echo "It's a hot and humid day.<br>";
} else {
    echo "The weather is pleasant.<br>";
}

// Nested if-else
$a = 10;
$b = 20;
$c = 30;
if ($a > $b) {
    if ($a > $c) {
        echo "$a is the largest number.<br>";
    } else {
        echo "$c is the largest number.<br>";
    }
} else {
    if ($b > $c) {
        echo "$b is the largest number.<br>";
    } else {
        echo "$c is the largest number.<br>";
    }
}
//Ternenry Operator
$name="Usman";
$name=!empty($name) ? $name : "Guest";
echo "Hello, $name!<br>";
?>