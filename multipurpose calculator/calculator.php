<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : null;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : null;
    $operation = $_POST['operation'];
    $result = null;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 == 0) {
                $result = "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        case 'exponentiate':
            $result = pow($num1, $num2);
            break;
        case 'percentage':
            $result = ($num1 * $num2) / 100;
            break;
        case 'sqrt':
            if ($num1 < 0) {
                $result = "Error: Square root of a negative number!";
            } else {
                $result = sqrt($num1);
            }
            break;
        case 'log':
            if ($num1 <= 0) {
                $result = "Error: Logarithm of a non-positive number!";
            } else {
                $result = log($num1);
            }
            break;
        default:
            $result = "Invalid operation selected!";
    }

    echo "<h2>Result: $result</h2>";
}
?>