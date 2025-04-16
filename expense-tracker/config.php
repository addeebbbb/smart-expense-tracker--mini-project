<?php
$host = "localhost";
$dbname = "expense_tracker";
$username = "root"; // Default WAMP username
$password = ""; // Default WAMP password (leave empty)

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
