<?php
include "config.php";

$judul = $_POST['judul_film'];
$genre = $_POST['genre'];
$tahun = $_POST['tahun_rilis'];

$query = "INSERT INTO film (judul_film, genre, tahun_rilis) VALUES ('$judul', '$genre', '$tahun')";
mysqli_query($conn, $query);

header("Location: posts.php");
?>