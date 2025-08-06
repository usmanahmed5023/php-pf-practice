<?php
//Fuctions in php
function name(){
    echo "Hello Usman Ahmed <br>";
}
name();
function sum(){

    $a = 5;
    $b = 10;
    $sum = $a + $b;
    echo "The sum of $a and $b is $sum.<br>";
}
sum();
$a=5;
$b=10;
function multiply($x, $y){
    $product = $x * $y;
    echo "The product of $x and $y is $product.<br>";
}
multiply($a, $b);
$a=5;
$b=10;
function multiGlobal(){
   global $a, $b;
   $product = $a * $b;
    echo "The product  is $product.<br>";
}
multiGlobal();

// Static Variables
function staticVar(){
    static $count = 0; // Static variable retains its value between function calls
    $count++;
    echo "Function called $count times.<br>";
}
staticVar();
staticVar();

$num1 = 30;
$num2 = 20;
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}
function subtractNumbers($num1, $num2) {
    return $num1 - $num2;
}
function multiplyNumbers($num1, $num2) {
    return $num1 * $num2;
}
function divideNumbers($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero.<br>";
    }
    return $num1 / $num2;
}
$result= "subtract";
switch($result){
    case 'add':
        echo "Addition: " . addNumbers($num1, $num2) . "<br>";
        break;
    case 'subtract':
        echo "Subtraction: " . subtractNumbers($num1, $num2) . "<br>";
        break;
    case 'multiply':
        echo "Multiplication: " . multiplyNumbers($num1, $num2) . "<br>";
        break;
    case 'divide':
        echo "Division: " . divideNumbers($num1, $num2) . "<br>";
        break;
    default:
        echo "Invalid operation.<br>";
}
// Fuction to Check the prime number
function isPrime($num) {
   if($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
if(isPrime(7)) {
    echo "7 is a prime number.<br>";
} else {
    echo "7 is not a prime number.<br>";
}
// Function to print the number of array 
$arr = array(1, 2, 3, 4, 5); // leaving the digit 3
function printArr(){
    global $arr;
    for ($value=0; $value < count($arr); $value++) {
        if ($arr[$value] != 3) { // Skip the number 3
            echo "Number: " . $arr[$value] . "<br>";
        }
    }
}
printArr();
function myName($name)
{
    echo "My name is $name.<br>";
}

myName("Usman");

// function after increasing the parameters and giving one values only
function myNameWithParams($name, $age = null) {
    if ($age !== null) {
        echo "My name is $name and I am $age years old.<br>";
    } else {
        echo "My name is $name.<br>";
    }  
}
myNameWithParams("Usman");
myNameWithParams(name:"Usman", age:22);

function referenceExample(&$var) {
    $var += 10; // This will modify the original variable
}
$number = 5;
referenceExample($number);
echo "After referenceExample: $number<br>";

// Function Swap
function swap($a,$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swap: a = $a, b = $b<br>";
}
$a = 10;
$b = 20;
swap($a, $b);


   function &myfunction(){
      static $x=10;
      echo "x Inside function: $x \n";
      return $x;
   }

   $a = &myfunction(); 
   echo "Returned by Reference: $a \n";
   $a=$a+10; 
   $a = &myfunction();

   // Function with default parameter
   function defaultFun($name = null, $age= null) {
       echo "Hello, $name and Age: $age!<br>";
   }

   defaultFun();
   defaultFun("Ali");
   defaultFun("Ali", 25);

   // Function to find the area of a rectangle
    function areaOfRectangle($length, $width) {
         return $length * $width;
    }
    $length = 5;
    $width = 10;
    $area = areaOfRectangle($length, $width);
    echo "The area of the rectangle is: $area<br>";

    // Function to find the square of a number
    function square($number) {
        return $number * $number;
    }
    $num = [4,5,6];
    $squaredValue = array_map('square',$num);
    echo var_dump($squaredValue);

    function makeUpper($text) {
    $text = strtoupper($text);
    return $text;
}

$name = "usman";
$newName = makeUpper($name);

echo $name;     // Output: usman (original stays same)
echo $newName;  // Output: USMAN (new value)


?>