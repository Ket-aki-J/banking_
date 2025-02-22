<?php
session_start();
if (!isset($_SESSION['account_number'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['account_number']; ?></h1>
    <p>Your Balance: $<?php echo $_SESSION['balance']; ?></p>
    <button onclick="logout()">Logout</button>

    <script>
        function logout() {
            fetch('logout.php').then(() => window.location = 'index.html');
        }
    </script>
</body>
</html>
