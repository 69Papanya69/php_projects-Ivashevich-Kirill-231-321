<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$equation = "X/8=6";
$parts = explode("=", $equation);

$leftSide = $parts[0];
$rightSide = $parts[1];

$operator = "/";
if (strpos($leftSide, $operator) !== false) {
    $operands = explode($operator, $leftSide);
    $varPosition = 1; // позиция переменной в операндах
} else {
    $operands = explode("*", $leftSide); // предполагаем, что X - умножение (если нет знака деления)
    $varPosition = 0; // позиция переменной в операндах
}
?>
</body>
</html>