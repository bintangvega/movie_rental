<?php
include "config.php";
$id = isset($_GET['id']) ? $_GET['id'] : '';
$film = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM film WHERE film_id='$id'"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Film</title>
</head>
<body>
    <h2><?= $id ? "Edit" : "Tambah" ?> Film</h2>
    <form method="POST" action="<?= $id ? "proses_edit.php" : "proses_post.php" ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Judul:</label>
        <input type="text" name="judul_film" value="<?= $film['judul_film'] ?? '' ?>" required><br>
        <label>Genre:</label>
        <input type="text" name="genre" value="<?= $film['genre'] ?? '' ?>" required><br>
        <label>Tahun Rilis:</label>
        <input type="text" name="tahun_rilis" value="<?= $film['tahun_rilis'] ?? '' ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
