<?php
//Panggil File koneksi
include 'connection.php';

    $title      = $_POST['title'];
    $genre      = $_POST['genre'];
    $trailer    = $_POST['trailer'];
    $trailer    = explode('=', $trailer);
    // jadi tadi salahnya di tanda kurungnya
    $trailer    = $trailer[1];

    $production = $_POST['production'];
    $synopsis   = $_POST['synopsis'];
    $cast       = $_POST['cast'];

    // $img
    $rand       = rand();
    $ekstensi   = array('png', 'jpg', 'jpeg');
    $img        = $_FILES['img']['name'];
    $ukuran     = $_FILES['img']['size'];
    $ext        = pathinfo($img, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:home.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){
            $pict = $rand.'_'.$img; 
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$rand.'_'.$img);

            mysqli_query($conn, "INSERT INTO playlist VALUES ('', '$title', '$genre', '$trailer', '$production',
            '$synopsis', '$cast', '$pict')");
            header("location:home.php?alert=berhasil");
        }else{
            header("location:home.php?alert=gagal_ukuran");
        }
    }
?>