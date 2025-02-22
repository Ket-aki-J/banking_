<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access.");
}

$user_id = $_SESSION['user_id'];
$amount = $_POST['amount'];

$sql = "UPDATE users SET balance = balance + $amount WHERE id = $user_id";
if ($conn->query($sql) === TRUE) {
    $conn->query("INSERT INTO transactions (user_id, type, amount) VALUES ($user_id, 'deposit', $amount)");
    $_SESSION['balance'] += $amount;
    echo "success";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
