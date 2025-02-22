<?php
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account_number = $_POST['account_number'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE account_number = '$account_number'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['account_number'] = $user['account_number'];
            $_SESSION['balance'] = $user['balance'];
            echo "success";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Account not found.";
    }
}

$conn->close();
?>
