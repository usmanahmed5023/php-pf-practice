<?php
// Try Catch block example
// function of divided by zero with error handling
function divide($x, $y) {
    try {
        if ($y == 0) {
            throw new Exception("Division by zero error.");
        }
        return $x / $y;
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    }
}

$result = divide(10, 0);
if ($result !== null) {
    echo "Result: " . $result;
} else {
    echo "An error occurred during division.";
}

?>