<?php
// Set your own unique secret key:
$secret = 'my_secret_key';

// Check if the secret key is in the query string:
if(isset($_GET['secret']) && $_GET['secret'] == $secret) {
    // If the secret key is correct, generate a random number between 1 and 10:
    $randomNumber = rand(1, 10);
    echo "The random number is: $randomNumber";
} else {
    // If the secret key is incorrect, display an error message:
    echo 'Error: Invalid secret key.';
}
?>