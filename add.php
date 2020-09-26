<?php
//Panggil File koneksi
include 'connection.php';

$title      = $_POST['title'];
$genre      = $_POST['genre'];
$trailer    = $_POST['trailer'];
$trailer    = explode['=', $trailer];
$trailer    = $trailer['1'];

$production = $_POST['production'];
$synopsis   = $_POST['synopsis'];
$cast       = $_POST['cast'];

mysqli_query($conn, "INSERT INTO playlist VALUES ('', '$title', '$genre', '$trailer', '$production', '$synopsis', '$cast')");

header("location:home.php?alert=berhasil");
?>