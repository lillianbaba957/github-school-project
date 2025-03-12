  <?php
// Connect to your database server
$db = new mysqli('localhost', 'user', 'password', 'database');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Query the database for all users
$result = $db->query("SELECT * FROM users");

// Loop through the results and print them
while($row = $result->fetch_assoc()) {
    echo $row["username"]."<br>";
}

$result->close();
$db->close();
?>