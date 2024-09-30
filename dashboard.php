<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body style="text-align:center;align-item:center">
    <h1 >Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    <a  href="logout.php">Logout</a>
</body>
</html>
