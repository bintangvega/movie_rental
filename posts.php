<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM film");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <a href="edit_post.php">Tambah Film</a>
    <table border="1">
        <tr><th>ID</th><th>Judul</th><th>Genre</th><th>Tahun</th><th>Aksi</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['film_id']; ?></td>
                <td><?= $row['judul_film']; ?></td>
                <td><?= $row['genre']; ?></td>
                <td><?= $row['tahun_rilis']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?= $row['film_id']; ?>">Edit</a> |
                    <a href="hapus_post.php?id=<?= $row['film_id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
