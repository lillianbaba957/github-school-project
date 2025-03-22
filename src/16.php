<?php
// Define a variable to store some data
$data = [
    "name" => "John Doe",
    "age" => 30,
    "address" => "123 Main St"
];

// Print the data using echo
echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
