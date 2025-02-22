<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (account_number, password, balance) VALUES ('$account_number', '$password', 1000.00)";

    if ($conn->query($sql) === TRUE) {
        echo "Sign-up successful. You can now log in.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
