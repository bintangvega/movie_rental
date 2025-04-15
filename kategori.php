<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Kategori</title>
</head>
<body>
    <h2>Kategori Film</h2>
    <table border="1">
        <tr><th>ID</th><th>Nama</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama_kategori']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html><?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Kategori</title>
</head>
<body>
    <h2>Kategori Film</h2>
    <table border="1">
        <tr><th>ID</th><th>Nama</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nama_kategori']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>