<?php
declare(strict_types=1);

// DEV rejim (o‘quv uchun)
ini_set('display_errors', '1');
error_reporting(E_ALL);

echo "Hello, World!" . PHP_EOL;

// Variables
$greeting = "Assalomu alaykum, O'zbekiston!";
$number = 42;

echo $greeting . PHP_EOL;

// Increment / decrement
$number++;
$number++;
$number--;

echo "number = {$number}" . PHP_EOL;

// Data types (dynamic typing demo)
$str = "Salom, O'zbekiston!"; // string
$int = 42;                    // int
$float = 3.14;                // float
$bool = true;                 // bool
$nullValue = null;            // null

$arr = [1, 2, 3, 4, 5];       // indexed array
$person = [                   // associative array
    "name" => "Ali",
    "age"  => 30,
    "city" => "Tashkent",
];

echo "greet types ready" . PHP_EOL;

// Function example
function greet(string $name): string
{
    return "Salom, {$name}!";
}

echo greet("Umidbek") . PHP_EOL;

// Type hints + strict_types demo
function sum(int $a, int $b): int
{
    return $a + $b;
}

echo "sum(10, 15) = " . sum(10, 15) . PHP_EOL;

// strict_types=1 bo‘lgani uchun bu odatda TypeError beradi
try {
    /** @noinspection PhpStrictTypeCheckingInspection */
    echo "sum(\"10\", \"15\") = " . sum("10", "15") . PHP_EOL;
} catch (TypeError $e) {
    echo "TypeError (strict_types=1): " . $e->getMessage() . PHP_EOL;
    echo "Fix: sum((int)\"10\", (int)\"15\") = " . sum((int)"10", (int)"15") . PHP_EOL;
}

// PROD rejim eslatmasi (darslik uchun)
// ini_set('display_errors', '0');
// error_reporting(0);