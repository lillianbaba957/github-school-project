<?php
// Function to return a random integer between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to return a random string from an array of strings
function getRandomString($array) {
    return $array[rand(0, count($array) - 1)];
}

// Example usage of the functions
$randomNumber = getRandomNumber();
echo "Random number: $randomNumber" . PHP_EOL;

$randomString = getRandomString(['apple', 'banana', 'orange']);
echo "Random string: $randomString" . PHP_EOL;
?>