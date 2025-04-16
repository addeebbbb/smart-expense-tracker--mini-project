<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        die("Unauthorized access");
    }

    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $category = $_POST['category'];
    $date = date('Y-m-d');

    $query = "INSERT INTO expenses (user_id, name, amount, category, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("isdss", $user_id, $name, $amount, $category, $date);

    if ($stmt->execute()) {
        echo "Expense added!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
