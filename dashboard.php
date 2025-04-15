<?php session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <a href="kategori.php">Kelola Kategori</a> | 
    <a href="posts.php">Kelola Film</a> | 
    <a href="logout.php">Logout</a>
</body>
</html>
